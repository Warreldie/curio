@extends('layouts/app')

@section('content')
<x-navigation/>

<x-page-header page="{{ $writer->name }}"/>

<p class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8" >{{ $writer->bio }}</p>

<h2>Books</h2>
<ul>
    @foreach($writer->books as $book)
    <li>{{ $book->title }}</li>
    @endforeach
</ul>

@endsection