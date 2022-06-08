@extends('layouts/app')

@section('content')

<div class="flex">
    <div class="top-0 left-0">
        <x-navigation/>
    </div>
    <div class="w-full">
        <x-page-header page="Bookclub"/>
        <div class="flex main">
            <div class="flex-1 content">
                <div class="discussieboard mt-8 ml-2 px-6 py-5 rounded shadow">
                    <h1 class="font-bold text-xl">Discussionboard</h1>
                    <x-button class="mt-8" cta="basic"/>
                </div>
            </div>
            <div class="flex-1 side">
                <div>

                </div>
            </div>
        </div>