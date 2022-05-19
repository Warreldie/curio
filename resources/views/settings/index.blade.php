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
                <x-side-setting heading="Subscription" link1="Subscription plan" link2="History" link3="Payments" />
                <x-side-setting heading="Other" link1="Privacy & Security" link2="FAQ" link3="Contact" />
            </div>
            <div>
                <x-setting />
            </div>
        </div>
    </div>
</div>

@endsection