<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Blade file</title>
</head>
<body>
    <h1>FOR TAKING INPUT</h1>
    <form action="/getData" method="POST" >
    @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="phone">Phone</label>
        <input type="text" name="phone">
        <label for="address">Address</label>
        <input type="text" name="address">
        <button type="submit">SAVE INFORMATION</button>
    </form>
</body>
</html>