<!DOCTYPE html>
<html>
<head>
    <title>Order Page</title>
</head>
<body>
    <h1>Order Details</h1>
    <form>
        <label>Customer ID:</label>
        <input type="text" value="{{ $customerID }}"><br>

        <label>Name:</label>
        <input type="text" value="{{ $name }}"><br>

        <label>Order No:</label>
        <input type="text" value="{{ $orderNo }}"><br>

        <label>Date:</label>
        <input type="text" value="{{ $date }}"><br>
    </form>
</body>
</html>
