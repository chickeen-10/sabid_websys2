<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Item Information</h2>
<form>
    <label>Item No:</label>
    <input type="text" value="{{ $itemNo }}" readonly><br>
    <label>Name:</label>
    <input type="text" value="{{ $name }}" readonly><br>
    <label>Price:</label>
    <input type="text" value="{{ $price }}" readonly>
</form>

</body>
</html>