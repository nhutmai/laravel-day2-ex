<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create New Product</title>
</head>
<body>
<h1>Edit Product</h1>
<h4><a href="/products">Back To Product List</a></h4>
<form action="/product/edit/{{$product->id}}" method="post">
    @csrf
    <div>Name: <input name="name" value="{{$product->name}}" required></div>
    <div>Quantity: <input name="quantity" value="{{$product->quantity}}" required></div>
    <div>Price: <input name="price" value="{{$product->price}}" required></div>
    <button type="submit">Update</button>
</form>
</body>
</html>
