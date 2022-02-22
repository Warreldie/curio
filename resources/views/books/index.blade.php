@extends('layouts/app')

@section('content')

<h1>Books</h1>

@foreach($books as $book)
<div>
    <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
</div>
@endforeach

@endsection