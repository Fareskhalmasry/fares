<h2>Books List</h2>

<a href="{{ route('books.create') }}">Add New Book</a>

<table border="1">
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
