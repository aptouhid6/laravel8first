<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Authors</title>
</head>
<body>
    <h1>List of Authors</h1>
    <hr>
    <a href="{{ route('author.create') }}">Create new Author</a>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date of Borth</th>
            <th>Actions</th>
        </tr>
        @foreach($authors as $author)
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->name}}</td>
                <td>{{ $author->email }}</td>
                <td>{{ $author->date_of_birth }}</td>
                <td>
                    <a href="{{ route('author.edit',$author->id) }}">Edit</a>
                    <form action="{{ route('author.destroy',$author->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Destroy</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>