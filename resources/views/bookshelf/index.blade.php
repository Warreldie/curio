@extends('layouts/app')

@section('content')

<x-navigation/>

<x-page-header page="Bookshelf"/>

<ul>
    @foreach($books as $book)
    <li>{{ $book }}</li>
    @endforeach
</ul>

@endsection