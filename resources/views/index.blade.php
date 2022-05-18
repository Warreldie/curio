@extends('layouts/app')

@section('content')

<div class="flex">
    <div class="top-0 left-0">
        <x-navigation/>
    </div>
    <div class="w-full">
        <x-page-header page="Dashboard"/>
        <div class="bg-slate-200">
            <x-info text="Box"/>
            <x-button cta="Continue Reading"/>
        </div>
    </div>
</div>

@endsection