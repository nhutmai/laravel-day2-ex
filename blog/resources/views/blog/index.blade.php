<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post List</title>
</head>
<body>
<h1>The Post List</h1>

<h4><a href="/createPost">Create New Post</a></h4>
@foreach($posts as $post)
    <div>
        <h2>{{$post->title}}</h2>
        <p>{{$post->content}}</p>
        <small>Create at: {{$post->created_at}}</small>
        <a href="/editPost/{{$post->id}}"><button style="color: blue">Edit</button></a>
        <a href="/deletePost/{{$post->id}}"><button style="color: red">Delete</button></a>
    </div>
    <hr>
@endforeach
</body>
</html>
