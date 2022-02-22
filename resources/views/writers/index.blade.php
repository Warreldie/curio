@extends('layouts/app')

@section('content')

    <h1>Writers</h1>

    @foreach($writers as $writer)
    <div>
        <a href="/writers/{{ $writer->id }}">{{ $writer->name }}</a>
    </div>
    @endforeach

@endsection