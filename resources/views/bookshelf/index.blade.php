@extends('layouts/app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.typekit.net/hbm1enl.css">
<div class="flex">
    <div class="top-0 left-0">  
        <x-navigation/>
    </div>
    <div class="w-full">
        <x-page-header page="Bookshelf"/>
    <div class="mx-auto py-10 px-4 sm:px-6 lg:px-8">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full bg-white">
            <div class="paddingHead">
                <!-- add filter icon + dropdown -->
                <div id="filter">
                    <div id="filterIcon">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.1875 5.625H20.8125C20.9745 5.68182 21.1214 5.77497 21.2418 5.89732C21.3623 6.01967 21.4532 6.16796 21.5075 6.33085C21.5617 6.49373 21.578 6.66688 21.5551 6.83704C21.5321 7.00719 21.4705 7.16983 21.375 7.3125L15.75 13.5V21.375L11.25 18V13.5L5.625 7.3125C5.52948 7.16983 5.46788 7.00719 5.44492 6.83704C5.42196 6.66688 5.43825 6.49373 5.49255 6.33085C5.54684 6.16796 5.6377 6.01967 5.75816 5.89732C5.87861 5.77497 6.02548 5.68182 6.1875 5.625Z" stroke="#242124" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <button style="font-size:16px">   &nbsp;&nbsp;All</button>
                    <div id="chevron-down">
                        <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.25 10.625L13.5 17.375L6.75 10.625" stroke="#242124" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <div id="addToShelfBtn">
                    <button>Add to bookshelf</button>
                </div>
            </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-auto" style="margin-top: 1rem;">
            <thead class="w-full text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="text-center">
                    <th scope="col" class="px-6 py-3">
                        Cover
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Author
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Rating
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Shelf
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date read
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only"></span>
                    </th>
                </tr>
            </thead>
            <tbody>
        @foreach($books as $book)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        <img style="height: 100px; width: 50px; margin: 0 auto;" src="{{ $book->image }}"> 
                    </th>
                    <td class="px-6 py-4" style="text-align: center;">
                        The Count of Monte Cristo
                    </td>
                    <td class="px-6 py-4" style="text-align: center;">
                        <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
                    </td>
                    <td class="px-6 py-4" style="text-align: center;">
                    <ul class="flex justify-center">
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                            </svg>
                        </li>
                        <li>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                            </svg>
                        </li>
                    </ul>
                    </td>
                    <td class="px-6 py-4" style="text-align: center;">
                        <form name="statusShelf" action="test.php" method="post" id="statusForm">
                            <select name="status" id="status">
                                <option value="finished">Finished</option>
                                <option value="wanttoread">Want to read</option>
                                <option value="reading">Reading</option>
                            </select>
                            <br><br>
                        </form>
                            <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-black divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">Finished</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">Reading</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">Want to read</a>
                            </li>
                            </ul>
                        </div> 
                    </td>
                    <td class="px-6 py-4" style="text-align: center;">
                        Date
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline float-left">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.125 7.875H6.75C6.15326 7.875 5.58097 8.11205 5.15901 8.53401C4.73705 8.95597 4.5 9.52826 4.5 10.125V20.25C4.5 20.8467 4.73705 21.419 5.15901 21.841C5.58097 22.2629 6.15326 22.5 6.75 22.5H16.875C17.4717 22.5 18.044 22.2629 18.466 21.841C18.8879 21.419 19.125 20.8467 19.125 20.25V16.875" stroke="#1D1E2C" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.125 16.875H13.5L23.0625 7.31251C23.5101 6.86496 23.7615 6.25795 23.7615 5.62501C23.7615 4.99208 23.5101 4.38506 23.0625 3.93751C22.6149 3.48996 22.0079 3.23853 21.375 3.23853C20.7421 3.23853 20.1351 3.48996 19.6875 3.93751L10.125 13.5V16.875Z" stroke="#1D1E2C" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18 5.625L21.375 9" stroke="#1D1E2C" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </a>

                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline float-right">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 7.875H22.5" stroke="#1D1E2C" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.25 12.375V19.125" stroke="#1D1E2C" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.75 12.375V19.125" stroke="#1D1E2C" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.625 7.875L6.75 21.375C6.75 21.9717 6.98705 22.544 7.40901 22.966C7.83097 23.3879 8.40326 23.625 9 23.625H18C18.5967 23.625 19.169 23.3879 19.591 22.966C20.0129 22.544 20.25 21.9717 20.25 21.375L21.375 7.875" stroke="#1D1E2C" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.125 7.875V4.5C10.125 4.20163 10.2435 3.91548 10.4545 3.7045C10.6655 3.49353 10.9516 3.375 11.25 3.375H15.75C16.0484 3.375 16.3345 3.49353 16.5455 3.7045C16.7565 3.91548 16.875 4.20163 16.875 4.5V7.875" stroke="#1D1E2C" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </a>
                    </td>
                </tr>
        @endforeach

            </tbody>
        </table> 
        <br>
        <nav aria-label="pagenav">
            <ul class="flex -space-x-px" style="justify-content: center">
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
            </ul>
        </nav>
        </div>
        </div>
</div>

    @endsection

