<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crerate New Author</title>
</head>
<body>
    <h1>Create New Author</h1>
    <hr>
    <form action="{{ route('author.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Entre Your Name">
       <br><br>
       <input type="text" name="email" placeholder="Entre Your Email">
       <br><br>
       <input type="date" name="date_of_birth" placeholder="Select authors date of birth">
       <br><br>
       <button type="submit">Store</button>
    </form>
</body>
</html>