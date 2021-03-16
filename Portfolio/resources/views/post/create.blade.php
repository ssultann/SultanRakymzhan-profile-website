<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new Post</title>
</head>
<body>
    <form action="{{ route('add-post') }}" method="post">
        @csrf
        <input type="text" name = "title" placeholder = "Title">
        <input type="text" name = "body" placeholder = "Body">
        <button type="submit">add post</button>
    </form>
</body>
</html>