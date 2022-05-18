@extends('layouts/app')

@section('content')

<div class="flex">
    <div class="top-0 left-0">
        <x-navigation/>
    </div>
    <div class="w-full">
        <x-page-header page="Dashboard"/>
        <div class="bg-slate-200">
            <div class="flex p-2">
                <x-info text="Reveal next event"/>
                <x-info text="Total books read"/>
            </div>
            <x-button cta="Continue Reading"/>
        </div>
    </div>
</div>

@endsection