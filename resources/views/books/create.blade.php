<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
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

    <h2>Add Book</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <input type="text" name="title" placeholder="Title"><br>

        <input type="text" name="author" placeholder="Author"><br>

        <input type="number" name="year_published" placeholder="Year"><br>

        <button type="submit">Add</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">Back</a>

</div>

</body>
</html>
