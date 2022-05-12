@extends('layouts/app')

@section('content')
<x-navigation/>

<x-page-header page="Writers"/>
    <ul class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        @foreach($writers as $writer)
            <div>
                <a href="/writers/{{ $writer->id }}">{{ $writer->name }}</a>
            </div>
        @endforeach
    </ul>
@endsection