<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SERVICE REQUEST FORM') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <section class="bg-white dark:bg-gray-900">
                    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-black">Add a new user</h2>
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                <div class="sm:col-span-2">
                                    <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" name="fullname" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type user name" required="" value="{{ old('fullname') }}">
                                    <x-input-error class="mt-2" :messages="$errors->get('fullname')" />
                                </div>


                                <div class="sm:col-span-2">
                                    <label for="profession" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                    <select id="profession" name="profession" value="{{ old('profession') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option selected="{{ old('profession') }}">Select profession</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Medical Technologist">Medical Technologist</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Agriculturist">Agriculturist</option>
                                    </select>
                                </div>
        

                                <div class="sm:col-span-2">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type user email" required="" value="{{ old('email') }}">
                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="contactNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                    <input type="text" name="contactNumber" id="contactNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type user phone number" required="" 
                                    value="{{ old('contactNumber') }}">
                                    <x-input-error class="mt-2" :messages="$errors->get('contactNumber')" />
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="srfNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SRF Number</label>
                                    <input type="text" name="srfNumber" id="srfNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type user email" required="" value="{{ old('srfNumber') }}">
                                    <x-input-error class="mt-2" :messages="$errors->get('srfNumber')" />
                                </div>

                                
                              <div class="sm:col-span-2">
                                <label for="datesent" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date sent</label>
                                <input type="date" name="datesent" id="datesent" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type user name" required="" value="{{ old('datesent') }}">
                                <x-input-error class="mt-2" :messages="$errors->get('datesent')" />
                            </div> 


                              <div class="sm:col-span-2">
                                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status/Remarks</label>
                                    <input type="text" name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type user name" required="" value="{{ old('status') }}">
                                    <x-input-error class="mt-2" :messages="$errors->get('status')" />
                                </div> 
                               
                            
                            </div>
                            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                Add user
                            </button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
