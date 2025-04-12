<!DOCTYPE html>
<html>
<head>
    <title>Customer</title>
</head>
<body>
    <h1>Customer</h1>
    <form>
        <label>Customer ID:</label>
        <input type="text" value="{{ $customerID }}"><br>

        <label>Name:</label>
        <input type="text" value="{{ $name }}"><br>

        <label>Address:</label>
        <input type="text" value="{{ $address }}"><br>
    </form>
</body>
</html>
