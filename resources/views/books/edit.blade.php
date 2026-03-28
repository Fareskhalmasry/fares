<h2>Edit Book</h2>

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $book->title }}"><br><br>

    <input type="text" name="author" value="{{ $book->author }}"><br><br>

    <input type="number" name="year_published" value="{{ $book->year_published }}"><br><br>

    <button type="submit">Update</button>
</form>
