@extends('layouts/app')

@section('content')

<x-navigation/>
<x-page-header page="Bookshelf"/>
<div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">

    <livewire:book-search /> 

    @endsection
</div>
