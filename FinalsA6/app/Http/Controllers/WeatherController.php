<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class WeatherController extends Controller
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('OPENWEATHER_API_KEY');
    }

    // RESTful API endpoint to get weather for one city
    public function getWeather(Request $request)
    {
        $city = $request->query('city', 'London');

        $cacheKey = "weather_{$city}";
        $weather = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($city) {
            $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
                'q' => $city,
                'appid' => $this->apiKey,
                'units' => 'metric',
            ]);

            if ($response->successful()) {
                return [
                    'city' => $city,
                    'temperature' => $response['main']['temp'],
                    'description' => $response['weather'][0]['description'],
                    'humidity' => $response['main']['humidity'],
                ];
            }

            return null;
        });

        if ($weather) {
            return response()->json($weather);
        }

        return response()->json(['error' => 'Could not fetch weather data'], 400);
    }

    // RESTful API endpoint to get weather for multiple cities
    public function getMultipleWeather()
    {
        $cities = ['London', 'Manila', 'Tokyo'];
        $weatherData = [];

        foreach ($cities as $city) {
            $cacheKey = "weather_{$city}";
            $weather = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($city) {
                $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
                    'q' => $city,
                    'appid' => $this->apiKey,
                    'units' => 'metric',
                ]);

                if ($response->successful()) {
                    return [
                        'city' => $city,
                        'temperature' => $response['main']['temp'],
                        'description' => $response['weather'][0]['description'],
                        'humidity' => $response['main']['humidity'],
                    ];
                }
                return ['city' => $city, 'error' => 'Failed to retrieve data'];
            });

            $weatherData[] = $weather;
        }

        return response()->json($weatherData);
    }
    public function viewWeather()
{
    $response = $this->getMultipleWeather();
    $weatherData = json_decode($response->getContent(), true);

    return view('weather', compact('weatherData'));
}

}
