<div class="ml-2 ">
    <!--
    <button type="button" class="pt-2 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
        <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
        </svg>
    </button>
    -->
        <label for="search"></label>
        <input wire:keyup="search" wire:model="search" id="search" name="search" type="text" autocomplete="search" class="w-5 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md" placeholder="Search">
        @if($search)
            <h2>Searching for: <em>{{ $search }}</em></h2>
        @endif
        @foreach($books as $book)
        <div>
            <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
        </div>
        @endforeach
</div>
