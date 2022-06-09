@extends('layouts/app')

@section('content')

<div class="flex">
    <div class="top-0 left-0">
        <x-navigation/>
    </div>
    <div class="w-full">
        <x-page-header page="Dashboard"/>
        <main>
            <div class="flex info">
                <div class="flex flex-1 mt-8 ml-2 px-6 py-5 content-center bg-white rounded shadow active">
                    <div class="flex-auto mt-2">
                        <svg width="75" height="75" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="64" height="64" rx="32" fill="#800725"/>
                            <path d="M43 19.1667H21C18.975 19.1667 17.3334 20.8083 17.3334 22.8333V44.8333C17.3334 46.8584 18.975 48.5 21 48.5H43C45.0251 48.5 46.6667 46.8584 46.6667 44.8333V22.8333C46.6667 20.8083 45.0251 19.1667 43 19.1667Z" stroke="white" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M39.3334 15.5V22.8333" stroke="white" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M24.6666 15.5V22.8333" stroke="white" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.3334 30.1667H46.6667" stroke="white" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M28.3333 37.5H24.6666V41.1667H28.3333V37.5Z" stroke="white" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <p>Reveal next event</p>
                        <h1>1 week</h1>
                    </div>
                </div>

                <div class="flex flex-1 mt-8 ml-2 px-6 py-5 content-center bg-white rounded shadow">
                    <div class="flex-auto mt-2 ml-2">
                        <svg width="75" height="75" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="64" height="64" rx="32" fill="#558B6E" fill-opacity="0.2"/>
                            <path d="M28.3333 44.8333H17.3333C16.8471 44.8333 16.3808 44.6402 16.037 44.2964C15.6932 43.9525 15.5 43.4862 15.5 43V17.3333C15.5 16.8471 15.6932 16.3808 16.037 16.037C16.3808 15.6932 16.8471 15.5 17.3333 15.5H28.3333C29.3058 15.5 30.2384 15.8863 30.9261 16.5739C31.6137 17.2616 32 18.1942 32 19.1667C32 18.1942 32.3863 17.2616 33.0739 16.5739C33.7616 15.8863 34.6942 15.5 35.6667 15.5H46.6667C47.1529 15.5 47.6192 15.6932 47.963 16.037C48.3068 16.3808 48.5 16.8471 48.5 17.3333V43C48.5 43.4862 48.3068 43.9525 47.963 44.2964C47.6192 44.6402 47.1529 44.8333 46.6667 44.8333H35.6667C34.6942 44.8333 33.7616 45.2196 33.0739 45.9073C32.3863 46.5949 32 47.5275 32 48.5C32 47.5275 31.6137 46.5949 30.9261 45.9073C30.2384 45.2196 29.3058 44.8333 28.3333 44.8333Z" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M32 19.1667V48.5" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22.8334 22.8333H24.6667" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22.8334 30.1667H24.6667" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M39.3334 22.8333H41.1667" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M39.3334 30.1667H41.1667" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M39.3334 37.5H41.1667" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <p>Total books read </p>
                        <h1>3</h1>
                    </div>
                </div>
                <div class="flex flex-1 mt-8 ml-2 px-6 py-5 content-center bg-white rounded shadow">
                    <div class="flex-auto mt-2 ml-2">
                        <svg width="75" height="75" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="64" height="64" rx="32" fill="#558B6E" fill-opacity="0.2"/>
                            <path d="M15.5 44.8333C18.0083 43.3852 20.8536 42.6228 23.75 42.6228C26.6464 42.6228 29.4917 43.3852 32 44.8333C34.5083 43.3852 37.3536 42.6228 40.25 42.6228C43.1464 42.6228 45.9917 43.3852 48.5 44.8333" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.5 21C18.0083 19.5518 20.8536 18.7894 23.75 18.7894C26.6464 18.7894 29.4917 19.5518 32 21C34.5083 19.5518 37.3536 18.7894 40.25 18.7894C43.1464 18.7894 45.9917 19.5518 48.5 21" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.5 21V44.8333" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M32 21V44.8333" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M48.5 21V44.8333" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <p>Total in bookself</p>
                        <h1>4</h1>
                    </div>
                </div>
                <div class="flex flex-1 mt-8 ml-2 px-6 py-5 content-center bg-white rounded shadow">
                    <div class="flex-auto mt-2 ml-2">
                        <svg width="75" height="75" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="64" height="64" rx="32" fill="#558B6E" fill-opacity="0.2"/>
                            <path d="M32 47.125C40.3533 47.125 47.125 40.3533 47.125 32C47.125 23.6467 40.3533 16.875 32 16.875C23.6467 16.875 16.875 23.6467 16.875 32C16.875 40.3533 23.6467 47.125 32 47.125Z" stroke="#558B6E" stroke-width="2.75" stroke-miterlimit="10"/>
                            <path d="M32 32L38.8059 25.1941" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <p>Total hours read</p>
                        <h1>75.4</h1>
                    </div>
                </div>
            </div>
            <div class="flex main">
                <div class="flex-1 content">
                <div class="flex mt-8 ml-2 px-6 py-5 content-center bg-white rounded shadow reading">
                    <div class="flex-1 mr-2">
                        <h1 class="font-bold text-3xl mb-2">Currently reading</h1>
                        <img class="readingimg mt-2" src="https://edit.org/images/cat/book-covers-big-2019101610.jpg" alt="bookcover">
                    </div>
                    <div class="flex-2 ml-2 mt-8 ml-2">
                        <div class="flex">
                            <div class="flex-1">
                                <h2 class="font-serif font-bold text-3xl mt-2">Wuthering Heights</h2>
                                <h3>Emily Bronté</h3>
                            </div>
                            <p class="flex-2 right mt-4 ml-2">Rating: 4.5</p>
                        </div>
                        <div class="mt-2 mb-2">
                            <p class="mt-2 mb-2">Book progress</p>
                            <span>45%</span>
                            <span>5 hours to go</span>
                            <p class="mt-2 mb-2">Current chapter</p>
                            <span>97%</span>
                            <span>20 minutes to go</span>
                        </div>
                        <div class="flex mt-2 mb-2">
                        <span class="flex-1 text-center mr-2 mt-2 mb-2 book">
                            <p class="mt-2 mb-2 mx-2 number">5.7</p>
                            <p class="mt-2 mb-2 mx-2">Hours reading</p>
                        </span>
                        <span class="flex-1 text-center mt-2 mb-2 ml-2">
                            <p class="mt-2 mb2 mx-2 number">1.1</p>
                            <p class="mt-2 mb2 mx-2">avg pages/min</p>
                        </span>
                        </div>

                        <div class="mt-8 ml-2 inline-flex rounded-md shadow">
                            <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bgviridian"> 
                                <p>Continue Reading</p>
                            </a>
                        </div>
                    </div>
                </div class="quiz">
                    <div class="flex-1 mt-8 ml-2 px-6 py-5 content-center bg-white rounded shadow">
                        <h1 class="font-bold text-2xl mb-2">Who said it?</h1>
                        <p class="block mt-2 mb-2 text-2xl">“Some people never go crazy. What truly horrible lives they must lead.”</p>
                        <div class="flex justify-center ml-2">
                            <div class="mt-8 ml-2 inline-flex rounded-md shadow">
                                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border text-base font-medium rounded-md btnviridian"> 
                                    <p>Jane Qustin</p>
                                </a>
                            </div>
                            <div class="mt-8 ml-2 inline-flex rounded-md shadow">
                                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border text-base font-medium rounded-md btnviridian"> 
                                    <p>Charlotte Bronte</p>
                                </a>
                            </div>
                            <div class="mt-8 ml-2 inline-flex rounded-md shadow">
                                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border text-base font-medium rounded-md btnviridian"> 
                                    <p>Albert Einstein</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 side">
                <div class="flex-1 mt-8 ml-2 px-6 py-5 content-center bg-white rounded shadow">
                    <h1 class="font-bold text-2xl mb-2">Invite a friend</h1>
                    <div class="flex ml-2">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white mt-2 mb-2 mr-2 ml-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white mt-2 mb-2 mr-2 ml-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white mt-2 mb-2 mr-2 ml-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white mt-2 mb-2 mr-2 ml-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white mt-2 mb-2 mr-2 ml-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">    
                    </div>
                    <div class="flex justify-end">
                        <p class="text-right right mt-2 mb-2 text-2xl">2 invites left.</p>
                    </div>
                </div>
                <div class="flex-1 mt-8 ml-2 px-6 py-5 content-center bg-white rounded shadow notifications">
                    <div class="flex">
                        <h1 class="font-bold text-2xl mb-2">Replies</h1>
                        <span>9</span>
                    </div>
                    <div>
                        <div class="flex">
                            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white mt-2 mb-2 mr-2 ml-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <p class="right mt-2 mb-2 text-2xl">Username Replied to your comment.</p>
                        </div>
                        <div class="flex">
                            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white mt-2 mb-2 mr-2 ml-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <p class="right mt-2 mb-2 text-2xl">Username Replied to your comment.</p>
                        </div>
                        <div class="flex">
                            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white mt-2 mb-2 mr-2 ml-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <p class="right mt-2 mb-2 text-2xl">Username Replied to your comment.</p>
                        </div>
                        <div class="flex">
                            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white mt-2 mb-2 mr-2 ml-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <p class="right mt-2 mb-2 text-2xl">Username Replied to your comment.</p>
                        </div>
                        <div class="flex">
                            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white mt-2 mb-2 mr-2 ml-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <p class="right mt-2 mb-2 text-2xl">Username Replied to your comment.</p>
                        </div>
                    </div>
                    <a href="#" class="flex justify-center text-center">Go to discussion board</a>
                </div>
                </div>
            </div>
        </main>
    </div>
</div>

@endsection