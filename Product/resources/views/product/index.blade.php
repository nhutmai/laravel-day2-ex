<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <h4><a href="/product/create">Create New Product</a></h4>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>
                        <a href="/product/{{$product->id}}">
                            {{$product->name}}
                        </a>
                    </td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
