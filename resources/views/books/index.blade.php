@extends('layouts/app')

@section('content')
<x-navigation/>

<x-page-header page="Books"/>

<ul class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
@foreach($books as $book)
<div>
    <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
</div>
@endforeach
</ul>

@endsection