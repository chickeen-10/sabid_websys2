<!DOCTYPE html>
<html>
<head>
    <title>Random Joke</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        .joke { font-size: 1.2em; margin-bottom: 10px; }
        .error {
            color: red;
            border-bottom: 2px solid red;  /* red underline */
            display: inline-block;
            padding-bottom: 2px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Here's a Random Joke for You</h1>

    @if ($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @elseif (!empty($joke))
        <div class="joke"><strong>Setup:</strong> {{ $joke['setup'] }}</div>
        <div class="joke"><strong>Punchline:</strong> {{ $joke['punchline'] }}</div>
    @else
        <p>No joke to display.</p>
    @endif

    <a href="{{ url()->current() }}">Get Another Joke</a>
</body>
</html>
