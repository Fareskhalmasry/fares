<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }
        .container {
            width: 40%;
            margin: auto;
        }
        input {
            width: 90%;
            padding: 8px;
            margin: 10px 0;
        }
        button {
            padding: 8px 15px;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Edit Book</h2>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ $book->title }}"><br>

        <input type="text" name="author" value="{{ $book->author }}"><br>

        <input type="number" name="year_published" value="{{ $book->year_published }}"><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">Back</a>

</div>

</body>
</html>
