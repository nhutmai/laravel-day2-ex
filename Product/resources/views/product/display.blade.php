<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
</head>
<body>
    <h1>Product</h1>
    <h4><a href="/products">Back To Product List</a></h4>
    <h4>Name: {{$p->name}}</h4>
    <h4>Quantity: {{$p->quantity}}</h4>
    <h4>Price: {{$p->price}}</h4>
    <h4>Created at: {{$p->created_at}}</h4>
    <h4>Last updated at: {{$p->updated_at}}</h4>
    <a href="/product/edit/{{$p->id}}"><button style="color: blue;padding: 4px">Edit</button></a>
    <a href="/product/delete/{{$p->id}}"><button style="color: red;padding: 4px">Delete</button></a>
</body>
</html>
