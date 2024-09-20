<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create A New Post</title>
</head>
<body>
<h1>Edit A Post</h1>
<h4><a href="/blogs">Back to Post List</a></h4>
<form action="/editPost/{{$post->id}}" method="post">
    @csrf
    <div>Title: <input name="title" value="{{$post->title}}" required></div>
    <div>Content: <input name="content" value="{{$post->content}}" required></div>
    <button type="submit">Update</button>
</form>
</body>
</html>
