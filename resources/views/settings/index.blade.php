@extends('layouts/app')

@section('content')

<div class="flex">
    <div class="top-0 left-0">
        <x-navigation/>
    </div>
    <div class="w-full">
        <x-page-header page="Settings"/>
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
                    <img class="mt-8 inline-block rounded-full ring-2 ring-white profileImg" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
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