<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex space-x-4 py-12">
        <!-- First Card -->
        <div class="max-w-sm p-6 bg-white border ml-80 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  TOTAL PARCEL RECORD 
                </h5>
            </a>
         <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            {{ $products }}
         </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the total records of item delivered to the PRC Office.</p>
            <a href="{{ route('products.index')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                See more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    
        <!-- Second Card -->
        <div class="max-w-sm p-6 bg-white border mx-auto border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <!-- Content for the second card goes here -->
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SERVICE REQUEST DATA</h5>
            </a>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $posts }}
            </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the total number of clients with issues in their LERIS Accounts</p>
            <a href="{{ route('posts.index')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                See more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            
        </div>
    
        <!-- Third Card -->
        <div class="max-w-sm p-6 bg-white border mx-auto border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <!-- Content for the third card goes here -->
            <a href="{{ route('users.index')}}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">REGISTERED ACCOUNTS</h5>
            </a>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $users }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the total number of Registered Accounts in the system.</p>
            <a href="{{ route('users.index')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                See more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            
        </div>
    </div>
 

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="sentence p-7 text-black-900 text-2xl dark:text-gray-100">
                    {{ __("You're logged in!") }} {{__("Hehe")}}
                </div>
            </div>
        </div>
   
    </div>
    
   
      
    
    
    

   
    
    
</x-app-layout>
