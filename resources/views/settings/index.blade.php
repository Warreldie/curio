@extends('layouts/app')

@section('content')

<div class="flex">
    <div class="top-0 left-0">
        <x-navigation/>
    </div>
    <div class="w-full">
        <x-page-header page="Settings"/>
        <div class="flex">
            <div>
                <x-side-setting heading="Profile" link1="Personal information" link2="Email settings" link3="Password settings" />
            </div>
        </div>
    </div>
</div>

@endsection