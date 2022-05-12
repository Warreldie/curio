
@extends('layouts/app')

@section('content')
@if( $errors-> any() )
      @component('components/alert')
          @slot('title') Error @endslot
          @slot('message') {{$errors}} @endslot
      @endcomponent
@endif

@if($flash = session('message'))
    @component('components/alert')
        @slot('title') Succes @endslot
        @slot('message') {{session('message')}} @endslot
    @endcomponent
@endif
<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">

    <div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Add a writer</h2>
    </div>

<form class="mt-8 space-y-6" action="{{ url('writers/store') }}" method="POST">
      @csrf
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
      <div>
          <label for="name">Name</label>
          <input value="{{ old('name') }}" id="name" name="name" type="name" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name">
        </div>
        <div>
          <label for="bio">Bio</label>
          <div class="mt-1">
                <textarea id="bio" name="bio" rows="3" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Bio">{{old('bio')}}</textarea>
              </div>
        </div>
      </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-midnight-green focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          </span>
          Save
        </button>
      </div>
</form>
</div>
</div>