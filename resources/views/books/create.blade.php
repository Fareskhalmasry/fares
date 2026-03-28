<h2>Add Book</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <input type="text" name="title" placeholder="Title"><br><br>

    <input type="text" name="author" placeholder="Author"><br><br>

    <input type="number" name="year_published" placeholder="Year"><br><br>

    <button type="submit">Add</button>
</form>
