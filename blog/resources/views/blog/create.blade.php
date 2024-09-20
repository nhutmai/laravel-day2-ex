<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create A New Post</title>
</head>
<body>
    <h1>Create A New Post</h1>
    <h4><a href="/blogs">Back to Post List</a></h4>
    <form action="/createPost" method="post">
        @csrf
        <div>Title: <input name="title" required></div>
        <div>Content: <input name="content" required></div>
        <button type="submit">Create</button>
    </form>
</body>
</html>
