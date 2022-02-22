@extends('layouts/app')

@section('content')

<h1>Details {{ $writer->name }}</h1>
<p>{{ $writer->bio }}</p>

<h2>Books</h2>
<ul>
    @foreach($writer->books as $book)
    <li>{{ $book->title }}</li>
    @endforeach
</ul>

@endsection