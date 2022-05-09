@extends('layouts/app')

@section('content')

@if( $errors-> any() )
      @component('components/alert')
          @slot('title') Error @endslot
          @slot('message') {{$errors}} @endslot
      @endcomponent
 @endif
<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">

    <div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">So you have been invited huh?</h2>
    </div>

    <form class="mt-8 space-y-6" action="{{ url('signup/store') }}" method="POST">
      @csrf
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
      <div>
          <label for="accountname">Accountname</label>
          <input id="name" name="name" type="name" autocomplete="name" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name">
        </div>
      <div>
          <label for="name">Name</label>
          <input id="name" name="name" type="name" autocomplete="name" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name">
        </div>
        <div>
          <label for="email-address">Email</label>
          <input id="email-address" name="email" type="email" autocomplete="email" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
        </div>
        <div>
          <label for="password">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500  sm:text-sm" placeholder="Password">
        </div>
      </div>

      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
          <label for="remember-me" class="ml-2 block text-sm text-gray-900"> I agree to Terms of Services and Privacy Policies </label>
        </div>

        <div class="text-sm">
        </div>
      </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-midnight-green focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          </span>
          Create Account
        </button>
      </div>
    </form>
  </div>
</div>

@endsection