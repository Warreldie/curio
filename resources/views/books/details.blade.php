@extends('layouts/app')

@section('content')
<x-navigation/>

<x-page-header page="{{ $book->title }}"/>

<x-button cta="Delete"/>
@endsection