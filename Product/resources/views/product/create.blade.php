<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create New Product</title>
</head>
<body>
<h1>Create New Product</h1>
<h4><a href="/products">Back To Product List</a></h4>
<form action="/product/create" method="post">
    @csrf
    <div>Name: <input name="name" required></div>
    <div>Quantity: <input name="quantity" required></div>
    <div>Price: <input name="price" required></div>
    <button type="submit">Create</button>
</form>
</body>
</html>
