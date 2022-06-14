@extends('layouts/app')

@section('content')

<div class="flex">
    <div class="top-0 left-0">
        <x-navigation/>
    </div>
    <div class="w-full">
    <header class="flex w-full bg-white shadow py-10 px-4">
        <div class="flex flex-1">
            <h1 class="mr-2 text-5xl font-bold text-gray-900">Bookclub</h1>
            <livewire:book-search />      
        </div>
        <div class="flex-1 absolute right-0 px-1 flex flex-row">
            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white" src="https://picsum.photos/id/999/200" alt="">
            <h2 class="m-2 p-2">Hi, {{$user->name}}!</h2>

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
        <div class="flex main">
            <div class="flex-1 content">
                <div class="discussieboard mt-8 ml-2 px-6 py-5 rounded shadow">
                    <div class="flex">
                        <h1 class="flex-1 font-bold text-xl">Discussionboard</h1>
                        <div class="flex flex-3">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.125 7.875H6.75C6.15326 7.875 5.58097 8.11205 5.15901 8.53401C4.73705 8.95597 4.5 9.52826 4.5 10.125V20.25C4.5 20.8467 4.73705 21.419 5.15901 21.841C5.58097 22.2629 6.15326 22.5 6.75 22.5H16.875C17.4717 22.5 18.044 22.2629 18.466 21.841C18.8879 21.419 19.125 20.8467 19.125 20.25V16.875" stroke="#242124" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.125 16.875H13.5L23.0625 7.31251C23.5101 6.86496 23.7615 6.25795 23.7615 5.62501C23.7615 4.99208 23.5101 4.38506 23.0625 3.93751C22.6149 3.48996 22.0079 3.23853 21.375 3.23853C20.7421 3.23853 20.1351 3.48996 19.6875 3.93751L10.125 13.5V16.875Z" stroke="#242124" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18 5.625L21.375 9" stroke="#242124" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p>Start discussion</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-1">
                            <div class="mt-8 ml-2 inline-flex rounded-md shadow">
                                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bgviridian"> 
                                    <p>General</p>
                                </a>
                            </div>
                            <div class="mt-8 ml-2 inline-flex rounded-md shadow">
                                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border text-base font-medium rounded-md btnviridian"> 
                                    <p>Spoilers</p>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-3 mt-8">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.1875 5.625H20.8125C20.9745 5.68182 21.1214 5.77497 21.2418 5.89732C21.3623 6.01967 21.4532 6.16796 21.5075 6.33085C21.5617 6.49373 21.578 6.66688 21.5551 6.83704C21.5321 7.00719 21.4705 7.16983 21.375 7.3125L15.75 13.5V21.375L11.25 18V13.5L5.625 7.3125C5.52948 7.16983 5.46788 7.00719 5.44492 6.83704C5.42196 6.66688 5.43825 6.49373 5.49255 6.33085C5.54684 6.16796 5.6377 6.01967 5.75816 5.89732C5.87861 5.77497 6.02548 5.68182 6.1875 5.625Z" stroke="#242124" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                            <p>Add</p>    
                        </div>
                    </div>
                    @foreach($books as $book)
                    <div class="flex flex-1 mt-8 ml-2 px-6 py-5 content-center rounded shadow subject">
                        <img class="flex-auto mx-2 mt-4 block h-12 w-12 rounded-full ring-2 ring-white" src="https://picsum.photos/id/{{1079 + $book->id}}/200" alt="">
                        <div class="flex-auto mx-2">
                            <h1 class="mt-2 mb-2">{{$book->title}}</h1>
                            <p class="mt-2 mb-2">{{$book->author}}</p>
                            <p class="mb-2 mt-2">{{$book->bio}}</p>
                            <div class="flex justify-center mt-2">
                                <div class="flex mt-2 mx-2">
                                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.5 23.625V9C4.5 8.10489 4.85558 7.24645 5.48851 6.61351C6.12145 5.98058 6.97989 5.625 7.875 5.625H19.125C20.0201 5.625 20.8786 5.98058 21.5115 6.61351C22.1444 7.24645 22.5 8.10489 22.5 9V15.75C22.5 16.6451 22.1444 17.5036 21.5115 18.1365C20.8786 18.7694 20.0201 19.125 19.125 19.125H9L4.5 23.625Z" stroke="#242124" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.5 12.375V12.3862" stroke="#242124" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 12.375V12.3862" stroke="#242124" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18 12.375V12.3862" stroke="#242124" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <p>
                                        12 anwsers
                                    </p>
                                </div>
                                <div class="flex mt-2 mx-2">
                                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.5 22.5001H9L20.8125 10.6876C21.4092 10.0909 21.7445 9.28151 21.7445 8.4376C21.7445 7.59368 21.4092 6.78433 20.8125 6.1876C20.2158 5.59086 19.4064 5.25562 18.5625 5.25562C17.7186 5.25562 16.9092 5.59086 16.3125 6.1876L4.5 18.0001V22.5001Z" stroke="#242124" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.1875 7.3125L19.6875 11.8125" stroke="#242124" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <p>
                                        Leave a message
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="flex-1 side">
                <div class="discussieboard mt-8 ml-2 px-6 py-5 rounded shadow">
                    <h1 class="font-bold text-xl">Montly meet up</h1>
                    <p class="mt-2 ml-2">
                        Discussion this months book Wuthering Heights. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </P>
                    <P class="mt-2 ml-2">
                        Responsible drinking & having conversations. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>
                    <div class="text-center MT-2">
                        <div class="inline-flex rounded-md shadow mt-2">
                            <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white important"> 
                                <p>Add to calendar</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="discussieboard mt-8 ml-2 px-6 py-5 rounded shadow">
                    <div class="flex">
                        <h1 class="flex-1 font-bold text-xl">Members(15)</h1>
                        <div class="flex-2 inline-flex rounded-md shadow content-center invite">
                            <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md"> 
                                <div>
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.125 12.375C12.6103 12.375 14.625 10.3603 14.625 7.875C14.625 5.38972 12.6103 3.375 10.125 3.375C7.63972 3.375 5.625 5.38972 5.625 7.875C5.625 10.3603 7.63972 12.375 10.125 12.375Z" stroke="#800725" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.375 23.625V21.375C3.375 20.1815 3.84911 19.0369 4.69302 18.193C5.53693 17.3491 6.68153 16.875 7.875 16.875H12.375C13.5685 16.875 14.7131 17.3491 15.557 18.193C16.4009 19.0369 16.875 20.1815 16.875 21.375V23.625" stroke="#800725" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.375 9V15.75M18 12.375H24.75H18Z" stroke="#800725" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </div>
                                <p>Invite to club</p>
                            </a>
                        </div>
                    </div>
                <ul class="mt-8">
                    @foreach($users as $user)
                    <li class="flex" class="my-2 mx-2">
                        <p class="flex-1">{{ $user->name }}</p>
                        <div class="flex-3 flex">
                            <a href="#" class="mx-2">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 23.625V9C4.5 8.10489 4.85558 7.24645 5.48851 6.61351C6.12145 5.98058 6.97989 5.625 7.875 5.625H19.125C20.0201 5.625 20.8786 5.98058 21.5115 6.61351C22.1444 7.24645 22.5 8.10489 22.5 9V15.75C22.5 16.6451 22.1444 17.5036 21.5115 18.1365C20.8786 18.7694 20.0201 19.125 19.125 19.125H9L4.5 23.625Z" stroke="#242124" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.5 12.375V12.3862" stroke="#242124" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9 12.375V12.3862" stroke="#242124" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18 12.375V12.3862" stroke="#242124" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </a>
                            <a href="#" class="mx-2">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.5 12.375C15.9853 12.375 18 10.3603 18 7.875C18 5.38972 15.9853 3.375 13.5 3.375C11.0147 3.375 9 5.38972 9 7.875C9 10.3603 11.0147 12.375 13.5 12.375Z" stroke="#242124" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.75 23.625V21.375C6.75 20.1815 7.22411 19.0369 8.06802 18.193C8.91193 17.3491 10.0565 16.875 11.25 16.875H15.75C16.9435 16.875 18.0881 17.3491 18.932 18.193C19.7759 19.0369 20.25 20.1815 20.25 21.375V23.625" stroke="#242124" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>