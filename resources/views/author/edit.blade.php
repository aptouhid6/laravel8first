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
    <form action="{{ route('author.update',$author->id) }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" value={{ $author->name }} placeholder="Entre Your Name">
       <br><br>
       <input type="text" name="email" value={{ $author->email }} placeholder="Entre Your Email">
       <br><br>
       <input type="date" name="date_of_birth" value={{ $author->date_of_birth }} placeholder="Select authors date of birth">
       <br><br>
       <button type="submit">Update</button>
    </form>
</body>
</html>