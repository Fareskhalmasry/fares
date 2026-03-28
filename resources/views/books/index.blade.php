<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }
        .container {
            width: 60%;
            margin: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        a, button {
            padding: 5px 10px;
            text-decoration: none;
            margin: 2px;
        }
    </style>
</head>
<body>

<div class="container">

    <h3>Fares Almasry</h3>
    <h3>120224052</h3>

    <h2>Books List</h2>

    <a href="{{ route('books.create') }}">Add New Book</a>

    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Actions</th>
        </tr>

        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->year_published }}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}">Edit</a>

                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</div>

</body>
</html>
