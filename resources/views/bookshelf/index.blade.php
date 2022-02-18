<h1>Bookshelf</h1>

<ul>
    @foreach($books as $book)
    <li>{{ $book }}</li>
    @endforeach
</ul>