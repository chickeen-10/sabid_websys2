<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
</head>
<body>
    <h1>Order Details</h1>
    <form>
        <label>Transaction No:</label>
        <input type="text" value="{{ $transNo }}"><br>

        <label>Order No:</label>
        <input type="text" value="{{ $orderNo }}"><br>

        <label>Item ID:</label>
        <input type="text" value="{{ $itemID }}"><br>

        <label>Name:</label>
        <input type="text" value="{{ $name }}"><br>

        <label>Price:</label>
        <input type="text" value="{{ $price }}"><br>

        <label>Quantity:</label>
        <input type="text" value="{{ $qty }}"><br>
    </form>
</body>
</html>
