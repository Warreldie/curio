<div class="flex">
    <div class="mx-2 mt-2 flex search">
    <svg width="30" height="30" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M9.58333 16.2917C13.2882 16.2917 16.2917 13.2882 16.2917 9.58333C16.2917 5.87842 13.2882 2.875 9.58333 2.875C5.87842 2.875 2.875 5.87842 2.875 9.58333C2.875 13.2882 5.87842 16.2917 9.58333 16.2917Z" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M20.125 20.125L14.375 14.375" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <input wire:keyup="search" wire:model="search" id="search" name="search" type="text" autocomplete="search" class="w-max ml-2 pl-2">
    </div>
    @if($search)
        <h2>Searching for: <em>{{ $search }}</em></h2>
    @endif
</div>