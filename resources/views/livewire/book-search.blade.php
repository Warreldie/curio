<div class="flex">
    <div class="m-2">
        <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.5833 23.2917C20.2882 23.2917 23.2917 20.2882 23.2917 16.5833C23.2917 12.8784 20.2882 9.875 16.5833 9.875C12.8784 9.875 9.875 12.8784 9.875 16.5833C9.875 20.2882 12.8784 23.2917 16.5833 23.2917Z" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M27.125 27.125L21.375 21.375" stroke="#558B6E" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M18.5 36C8.83502 36 1 28.165 1 18.5H-1C-1 29.2696 7.73045 38 18.5 38V36ZM36 18.5C36 28.165 28.165 36 18.5 36V38C29.2696 38 38 29.2696 38 18.5H36ZM18.5 1C28.165 1 36 8.83502 36 18.5H38C38 7.73045 29.2696 -1 18.5 -1V1ZM18.5 -1C7.73045 -1 -1 7.73045 -1 18.5H1C1 8.83502 8.83502 1 18.5 1V-1Z" fill="#558B6E"/>
        </svg>
    </div>
    <input wire:keyup="search" wire:model="search" id="search" name="search" type="text" autocomplete="search" class="w-max py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md" placeholder="Search">
    @if($search)
        <h2>Searching for: <em>{{ $search }}</em></h2>
    @endif
</div>