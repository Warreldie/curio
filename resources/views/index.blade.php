@extends('layouts/app')

@section('content')

<div class="flex">
    <div class="top-0 left-0">
        <x-navigation/>
    </div>
    <div class="w-full">
        <x-page-header page="Dashboard"/>
        <div>
            <div class="flex info">
                <x-info text="Reveal next event" number="1 WEEK"/>
                <x-info text="Total books read" number="3"/>
                <x-info text="Total in bookself" number="4"/>
                <x-info text="Total hours read" number="75.3"/>
            </div>
            <div class="flex main">
                <div class="flex flex-1 content">
                    <x-reading class="flex-1"/>
                    <x-quiz class="flex-1" />
                </div>
                <div class="flex-1 side">
                    <x-friends />
                    <x-notifications />
                </div>
            </div>
        </div>
    </div>
</div>

@endsection