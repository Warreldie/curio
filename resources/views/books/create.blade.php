@extends('layouts/app')

@section('content')
<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">

    <div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Make a book</h2>
    </div>

<form class="mt-8 space-y-6" action="{{ url('books/store') }}" method="POST">
      @csrf
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
      <div>
          <label for="title">Title</label>
          <input id="title" name="title" type="title" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Title">
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
