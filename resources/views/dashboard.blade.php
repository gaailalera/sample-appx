<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="sentence p-6 text-black-900 text-2xl dark:text-gray-100">
                    {{ __("You're logged in!") }} {{__("Hehe")}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
