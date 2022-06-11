<header class="flex w-full bg-white shadow py-10 px-4">
    <div class="flex flex-1">
        <h1 class="mr-2 text-5xl font-bold text-gray-900">{{$page}}</h1>
        <livewire:book-search />      
    </div>
    <div class="flex-1 absolute right-0 px-1 flex flex-row">
        <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        <h2 class="m-2 p-2">Hi, John!</h2>
        @if (Auth::check())

        <p>{{Auth::id()}}</p>

        @endif
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
        <button type="button" class="m-2 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <!-- Heroicon name: outline/bell -->
            <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="37" height="37" rx="18.5" fill="#558B6E"/>
            <path d="M22.7188 14.8438L26.6562 18.5L22.7188 22.1562" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M26.375 18.5H17.0938" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22.1562 10.3438H12.5938C11.3511 10.3438 10.3438 11.3511 10.3438 12.5937V24.4062C10.3438 25.6489 11.3511 26.6562 12.5938 26.6562H22.1562" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
</header>