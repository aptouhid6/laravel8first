<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
</head>
<body>
    <h1>Book List</h1>
    <hr>
    <a href="{{ route('bookshop.create') }}">Create New Book</a>
    <table border="1px">
        <tr>
            <th>Id</th>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Publish Date</th>
            <th>Action</th>
        </tr>
        @foreach($bookshops as $bookshop)
        <tr>
            <td>{{ $bookshop->id }}</td>
            <td>{{ $bookshop->name }}</td>
            <td>{{ $bookshop->author_name }}</td>
            <td>{{ $bookshop->publish_date }}</td>
            <td>
                <a href="{{ route('bookshop.edit',$bookshop->id) }}">Edit</a>
                <form action="{{ route('bookshop.delete',$bookshop->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>