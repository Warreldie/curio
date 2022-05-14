<div>
    <label for="search">Search</label>
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
