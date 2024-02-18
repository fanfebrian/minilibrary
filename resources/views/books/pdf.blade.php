<!-- resources/views/pdf/books.blade.php -->

<h1>Books List</h1>

<table border="1">
    <thead>
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Author</th>
            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->genre }}</td>
                <td>{{ $book->author }}</td>
                <!-- Add more columns as needed -->
            </tr>
        @endforeach
    </tbody>
</table>