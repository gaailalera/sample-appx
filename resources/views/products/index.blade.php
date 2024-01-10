<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('RECORDS FOR INCOMING PARCEL') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="max-w-screen-2x mx-60 mr-1 sm:px-6 lg:px-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
                    <div class="mx-auto max-w-screen-2xl px-4 lg:px-1">
                        <!-- Start coding here -->
                        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                                <div class="w-full md:w-1/2">
                                    <form action="{{ route('products.index') }}" class="flex items-center" method="GET">
                                        <label for="simple-search" name="search" class="sr-only">Search</label>
                                        <div class="relative w-full">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <input type="text" id="simple-search" name="search" value="{{ request('search') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search">
                                        </div>
                                    </form>
                                </div>
                                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                   <a href="{{ route('products.create') }} " <button type="button" class="flex items-center justify-center text-black bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                        </svg>
                                        Add product
                                    </button></a>
                                    <div class="flex items-center space-x-3 w-full md:w-auto">
                                        <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                            <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                            </svg>
                                            Actions
                                        </button>
                                        <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                                                <li>
                                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass Edit</a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <a href="{{ route('products.deleteAllp')}}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete all</a>
                                            </div>
                                        </div>
                                        <a href="{{ route('generate.ppdf') }}" target="_blank" <button type="button" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                                            <span class="relative py-3 px-4 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                               Print PDF
                                            </span>
                                            </button> 
                                                          
                                       </a>
                                    </div>
                                </div>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            
                                
                                            <th scope="col" class="px-4 py-3">Control Number</th>
                                            <th scope="col" class="px-4 py-3">Source of Mail</th>
                                            <th scope="col" class="px-4 py-3">Date Received</th>
                                            <th scope="col" class="px-4 py-3">Time Received</th>
                                           {{-- <th scope="col" class="px-4 py-3">Date/Time Received</th>--}}
                                            <th scope="col" class="px-4 py-3">Subject Matter</th>
                                            <th scope="col" class="px-4 py-3">Status</th>
                                            <th scope="col" class="px-4 py-3">Action Unit</th>
                                            <th scope="col" class="px-4 py-3">Date Released</th>   
                                            <th scope="col" class="px-4 py-3">Name of Personnel</th>
                                            <th scope="col" class="px-4 py-3">Initial Received</th>
                                            <th scope="col" class="px-4 py-3">Tracking Number</th>
                                            <th scope="col" class="px-4 py-3">
                                                <span class="sr-only">Actions</span>
                                            </th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr class="border-b dark:border-gray-700">
                                               
                                               
                                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->controlNumber }}</th>
                                                <td class="px-4 py-3">{{ $product->sourceofmail }}</td>
                                                <td class="px-4 py-3">{{ \Carbon\Carbon::parse($product->dateReceived)->format('M d, Y') }}</td>
                                                <td class="px-4 py-3">{{ \Carbon\Carbon::parse($product->timeReceived)->format('h:i A') }}</td>
                                              {{--  <th scope="row" class="px-4 py-3 font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $product->created_at->format('M d, Y h:i A') }}</th>--}}
                                                <td class="px-4 py-3">{{ $product->subjectMatter }}</td>
                                                <td class="px-4 py-3">{{ $product->statuss }}</td>
                                                <td class="px-4 py-3">{{ $product->actionUnit }}</td>
                                                <td class="px-4 py-3">{{ \Carbon\Carbon::parse($product->dateReleased)->format('M d, Y') }}</td>
                                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->nameofpersonnel }}</th>
                                                <td class="px-4 py-3">{{ $product->initialReceived }}</td>
                                                <td class="px-4 py-3">{{ $product->trackingNumber }}</td>
                                                <td class="px-4 py-3 flex items-center justify-end">



                                                    <button id="{{ str($product->id)->slug() }}-button" data-dropdown-toggle="{{ str($product->id)->slug() }}" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                        </svg>
                                                    </button>
                                                    <div id="{{ str($product->id)->slug() }}" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="{{ str($product->id)->slug() }}-button">
                                                            <li>
                                                                <a href="{{ route('products.edit', $product) }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                            </li>
                                                        </ul>
                                                        <div class="py-1">
                                                            <form method="POST" action="{{ route('products.destroy', $product) }}">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a href="{{ route('products.destroy', $product) }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" onclick="event.preventDefault(); this.closest('form').submit();">Delete</a>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                                {{ $products->links() }}
                            </nav>
                        </div>
                    </div>
                    </section>
            </div>
        </div>
    </div>
</x-app-layout>
