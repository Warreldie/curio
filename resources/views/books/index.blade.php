<h1>Books</h1>

@foreach($books as $book)
<div>
    <a href="/books/{{ $book->id }}">{{ $book->name }}</a>
</div>
@endforeach