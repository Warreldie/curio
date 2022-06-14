@extends('layouts/app')

@section('content')

<div class="flex">
    <div class="top-0 left-0">
        <x-navigation/>
    </div>
    <div class="w-full">
    <header class="flex w-full bg-white shadow py-10 px-4">
        <div class="flex flex-1">
            <h1 class="mr-2 text-5xl font-bold text-gray-900">Settings</h1>
            <livewire:book-search />      
        </div>
        <div class="flex-1 absolute right-0 px-1 flex flex-row">
            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white" src="https://picsum.photos/id/999/200" alt="">
            <h2 class="m-2 p-2">Hi, {{$users->name}}!</h2>

            <button type="button" class="m-2 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                <!-- Heroicon name: outline/bell -->
                <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="37" height="37" rx="18.5" fill="#558B6E"/>
                <path d="M25.25 10.625H11.75C10.5074 10.625 9.5 11.6324 9.5 12.875V26.375C9.5 27.6176 10.5074 28.625 11.75 28.625H25.25C26.4926 28.625 27.5 27.6176 27.5 26.375V12.875C27.5 11.6324 26.4926 10.625 25.25 10.625Z" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M23 8.375V12.875" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14 8.375V12.875" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9.5 17.375H27.5" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M16.25 21.875H14V24.125H16.25V21.875Z" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button type="button" class="m-2 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                <!-- Heroicon name: outline/bell -->
                <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="37" height="37" rx="18.5" fill="#558B6E"/>
                <path d="M16.25 10.625C16.25 10.0283 16.4871 9.45597 16.909 9.03401C17.331 8.61205 17.9033 8.375 18.5 8.375C19.0967 8.375 19.669 8.61205 20.091 9.03401C20.5129 9.45597 20.75 10.0283 20.75 10.625C22.042 11.2359 23.1433 12.1869 23.9361 13.376C24.7288 14.5651 25.183 15.9475 25.25 17.375V20.75C25.3347 21.4494 25.5824 22.1192 25.9732 22.7054C26.364 23.2916 26.8869 23.7778 27.5 24.125H9.5C10.1131 23.7778 10.636 23.2916 11.0268 22.7054C11.4176 22.1192 11.6653 21.4494 11.75 20.75V17.375C11.817 15.9475 12.2712 14.5651 13.0639 13.376C13.8567 12.1869 14.958 11.2359 16.25 10.625" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.125 24.125V25.25C15.125 26.1451 15.4806 27.0036 16.1135 27.6365C16.7464 28.2694 17.6049 28.625 18.5 28.625C19.3951 28.625 20.2536 28.2694 20.8865 27.6365C21.5194 27.0036 21.875 26.1451 21.875 25.25V24.125" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <a href="{{url('/signout')}}" type="button" class="m-2 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                <!-- Heroicon name: outline/bell -->
                <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="37" height="37" rx="18.5" fill="#558B6E"/>
                <path d="M22.7188 14.8438L26.6562 18.5L22.7188 22.1562" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M26.375 18.5H17.0938" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22.1562 10.3438H12.5938C11.3511 10.3438 10.3438 11.3511 10.3438 12.5937V24.4062C10.3438 25.6489 11.3511 26.6562 12.5938 26.6562H22.1562" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </header>
        <div class="flex settingsPage">
            <div>
            <div class="mt-8 ml-2 px-6 py-5 content-center bg-white rounded shadow">
                <h1 class="border-b-2 border-solid border-blue text-3xl font-bold pb-2">Profile</h1>
                <div class="flex mt-2 mt-2 mb-2 justify-between">
                    <a href="#">Personal information</a>
                    <svg class="ml-2" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.125 6.75L16.875 13.5L10.125 20.25" stroke="#154B53" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="flex mt-2 mb-2 justify-between">
                    <a href="#">Email settings</a>
                    <svg class="ml-2" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.125 6.75L16.875 13.5L10.125 20.25" stroke="#154B53" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="flex mt-2 mb-2 justify-between">
                    <a href="#">Password settings</a>
                    <svg class="ml-2" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.125 6.75L16.875 13.5L10.125 20.25" stroke="#154B53" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="mt-8 ml-2 px-6 py-5 content-center bg-white rounded shadow">
                <h1 class="border-b-2 border-solid border-blue text-3xl font-bold pb-2">Subscription</h1>
                <div class="flex mt-2 mb-2 justify-between">
                    <a href="#">Subscription plan</a>
                    <svg class="ml-2" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.125 6.75L16.875 13.5L10.125 20.25" stroke="#154B53" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="flex mt-2 mb-2 justify-between">
                    <a href="#">History</a>
                    <svg class="ml-2" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.125 6.75L16.875 13.5L10.125 20.25" stroke="#154B53" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="flex mt-2 mb-2 justify-between">
                    <a href="#">Payments</a>
                    <svg class="ml-2" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.125 6.75L16.875 13.5L10.125 20.25" stroke="#154B53" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="mt-8 ml-2 px-6 py-5 bg-white content-center rounded shadow">
                <h1 class="border-b-2 border-solid border-blue text-3xl font-bold pb-2">Other</h1>
                <div class="flex mt-2 mb-2 justify-between">
                    <a href="#">Privacy & Security</a>
                    <svg class="ml-2" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.125 6.75L16.875 13.5L10.125 20.25" stroke="#154B53" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="flex mt-2 mb-2 justify-between">
                    <a href="#">FAQ</a>
                    <svg class="ml-2" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.125 6.75L16.875 13.5L10.125 20.25" stroke="#154B53" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="flex mt-2 mb-2 justify-between">
                    <a href="#">Contact</a>
                    <svg class="ml-2" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.125 6.75L16.875 13.5L10.125 20.25" stroke="#154B53" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            </div>
            <div class="flex justify-center containerSettingsBox">
            <div class="flex justify-center mt-8 ml-2 px-6 py-5 content-center bg-white rounded shadow settingsBox">
                <div id="profileImgBox">
                    <h1 class="text-3xl font-bold pb-2">Personal Information</h1>
                    <div class="flex">
                    <img class="mt-8 inline-block rounded-full ring-2 ring-white profileImg" src="https://picsum.photos/id/999/200" alt="">
                </div>
                    <a class="flex mt-2" href="#">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 22.5H9L20.8125 10.6875C21.4092 10.0907 21.7445 9.28139 21.7445 8.43747C21.7445 7.59356 21.4092 6.78421 20.8125 6.18747C20.2158 5.59074 19.4064 5.25549 18.5625 5.25549C17.7186 5.25549 16.9092 5.59074 16.3125 6.18747L4.5 18V22.5Z" stroke="#558B6E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.1875 7.3125L19.6875 11.8125" stroke="#558B6E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p>Edit picture</p>
                    </a>
                </div>
                <div class="flex justify-center mt-2 mb-2">
                <form class="mt-8 ml-2 space-y-6 px-2" action="{{ url('setting/store') }}" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                    <div class="flex mt-8 mb-2">
                    <label class="mr-2" for="accountname">Account name</label>
                    <input id="accountname" name="accountname" type="accountname" autocomplete="accountname" class="ml-8 appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="JohnD">
                    </div>
                    <div class="flex mt-2 mb-2">
                    <label class="mr-2" for="fullname">FullName</label>
                    <input id="fullname" name="fullname" type="fullname" autocomplete="fullname" class="appearance-none mx-2 relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="John Doe">
                    </div>
                    <div class="flex mt-2 mb-2">
                    <label class="mr-2" for="accountname">Address</label>
                    <input id="accountname" name="accountname" type="accountname" autocomplete="accountname" class="appearance-none mx-2 relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Ledebergplein 34">
                    </div>
                    <div class="flex mt-2 mb-2">
                    <label class="mr-2" for="fullname">City + Code</label>
                    <input id="fullname" name="fullname" type="fullname" autocomplete="fullname" class="appearance-none mx-2 relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Gent 9000">
                    </div>
                    <div class="flex mt-2 mb-2">
                    <label class="mr-2" for="fullname">Country</label>
                    <input id="fullname" name="fullname" type="fullname" autocomplete="fullname" class="appearance-none mx-2 relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Belgium">
                    </div>
                    <div class="flex mt-2 mb-2">
                    <label for="email-address">Email</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" class="appearance-none mx-2 relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="john.doe@gmail.com">
                    </div>
                    <div class="flex mt-2 mb-2">
                    <label for="password">Payment Details</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" class="appearance-none mx-2 relative block w-full px-3 py-2 border border-gray-300 text-gray-900 rounded  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500  sm:text-sm" placeholder="**** **** **** 3456">
                    </div>
                    <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-midnight-green focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    </span>
                    Edit information
                    </button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection