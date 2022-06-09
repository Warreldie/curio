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
                    <div class="mt-8 ml-2 inline-flex rounded-md shadow">
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bgviridian"> 
                            <p>General</p>
                        </a>
                    </div>
                    <div class="mt-8 ml-2 inline-flex rounded-md shadow">
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border text-base font-medium rounded-md btnviridian"> 
                            <p>Spoilers</p>
                        </a>
                    </div>
                    <div class="flex flex-1 mt-8 ml-2 px-6 py-5 content-center rounded shadow subject">
                        <button type="button" class="m-2 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </button>
                        <div class="flex-auto">
                            <p>What's up with the Bronté sisters?</p>
                            <p>Username</p>
                            <h1>He share of first to worse. Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear.</h1>
                        </div>
                    </div>
                    <div class="flex flex-1 mt-8 ml-2 px-6 py-5 content-center rounded shadow subject">
                        <button type="button" class="m-2 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </button>
                        <div class="flex-auto">
                            <p>What's up with the Bronté sisters?</p>
                            <p>Username</p>
                            <h1>He share of first to worse. Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear.</h1>
                        </div>
                    </div>
                    <div class="flex flex-1 mt-8 ml-2 px-6 py-5 content-center rounded shadow subject">
                        <button type="button" class="m-2 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </button>
                        <div class="flex-auto">
                            <p>What's up with the Bronté sisters?</p>
                            <p>Username</p>
                            <h1>He share of first to worse. Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear.</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 side">
                <div class="discussieboard mt-8 ml-2 px-6 py-5 rounded shadow">
                    <h1 class="font-bold text-xl">Montly meet up</h1>
                    <p>
                        Discussion this months book Wuthering Heights
                        Responsible drinking & having conversations
                    </p>
                    <x-button class="flex-auto mt-2 mb-2 mr-2 ml-2" cta="Add to calendar" color="important"/>
                </div>
            </div>
        </div>
    </div>
</div>