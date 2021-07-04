<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new Author</title>
</head>
<body>
    <h1>Create New Author</h1>
    <hr>
    <form action="{{ route('book.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter book name">
        <br><br>
        <input type="text" name="author_name" placeholder="Entre author name">
        <br><br>
        <input type="date" name="publish_date">
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>