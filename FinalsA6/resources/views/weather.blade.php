<!DOCTYPE html>
<html>
<head>
    <title>Weather Dashboard</title>
    <style>
        .container { display: flex; justify-content: space-around; }
        .box { width: 30%; padding: 20px; background: #f0f0f0; margin: 10px; border-radius: 10px; text-align: center; }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Weather for 3 Cities</h1>
    <div class="container">
        @foreach($weatherData as $weather)
            <div class="box">
                <h2>{{ $weather['city'] }}</h2>
                @if(isset($weather['error']))
                    <p>{{ $weather['error'] }}</p>
                @else
                    <p>Temperature: {{ $weather['temperature'] }} °C</p>
                    <p>Description: {{ $weather['description'] }}</p>
                    <p>Humidity: {{ $weather['humidity'] }}%</p>
                @endif
            </div>
        @endforeach
    </div>
</body>
</html>
