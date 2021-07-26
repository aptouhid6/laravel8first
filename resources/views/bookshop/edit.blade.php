<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Author</title>
</head>
<body>
    <h1>Edit Author</h1>
    <hr>
    <form action="{{ route('bookshop.update', $bookshop->id) }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{ $bookshop->name }}" placeholder="Enter your name">
        <br><br>
        <input type="text" name="author_name" value="{{ $bookshop->author_name }}" placeholder="Enter your author_name">
        <br><br>
        <input type="date" value="{{ $bookshop->publish_date }}" name="publish_date">
        <br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>