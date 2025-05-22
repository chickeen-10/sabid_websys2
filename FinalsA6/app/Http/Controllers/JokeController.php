<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class JokeController extends Controller
{
    public function getJoke()
    {
        $response = Http::get("https://official-joke-api.appspot.com/random_joke");
    
        if ($response->successful()) {
            $joke = $response->json();
            return view('joke', compact('joke'));
        }
    
        // Pass error message as an array
        session()->flash('error', 'Could not fetch joke');
        return view('joke');
            }
}
