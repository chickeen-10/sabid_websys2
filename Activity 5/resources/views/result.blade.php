<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Results</title>
    <style>
        /* Style para sa box */
        .box {
            padding: 10px;
            width: fit-content;
            color: white;
            font-weight: bold;
        }
        .green { background-color: green; } /* EVEN result */
        .blue { background-color: blue; } /* ODD result */
        .text-blue { color: blue; } /* ODD input */
        .text-orange { color: orange; } /* EVEN input */
    </style>
</head>
<body>
    <h2>BOYS - Keneth A. Sabid - 3B</h2>

    <!-- Unang Set ng Operation -->
    <p>Value 1: <span class="text-{{ $textColor1 }}">{{ $num1 }}</span></p>
    <p>Value 2: <span class="text-{{ $textColor2 }}">{{ $num2 }}</span></p>
    <p>Operator: {{ $operation }}</p>

    <div class="box {{ $bgColor1 }}">
        Result: {{ $result1 }}
    </div>

    <hr>

    <!-- Pangalawang Set ng Operation -->
    <p>Value 1: <span class="text-{{ $textColor3 }}">{{ $num3 }}</span></p>
    <p>Value 2: <span class="text-{{ $textColor4 }}">{{ $num4 }}</span></p>
    <p>Operator: {{ $operation2 }}</p>

    <div class="box {{ $bgColor2 }}">
        Result: {{ $result2 }}
    </div>
</body>
</html>
