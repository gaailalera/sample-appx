<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CREATE USER') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-black">Add new input</h2>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                <div class="sm:col-span-2">
                    <label for="controlNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Control NO.</label>
                    <input type="text" name="controlNumber" id="controlNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type user name" required="" value="{{ old('controlNumber') }}">
                    <x-input-error class="mt-2" :messages="$errors->get('controlNumber')" />
                </div>

                <div class="sm:col-span-2">
                    <label for="sourceofmail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Source of Mail</label>
                    <select id="sourceofmail" name="sourceofmail"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="{{ old('sourceofmail') }}">Select source of mail</option>
                        <option value="PRC ROSALES">PRC ROSALES</option>
                        <option value="PRC MANILA">PRC MANILA</option>
                        <option value="PRC CENTRAL">PRC CENTRAL</option>
                        <option value="PRC ILOCOS SUR">PRC ILOCOS SUR</option>
                    </select>
                </div>

                <div class="col-span-2 sm:col-span-1">
                    <label for="dateReceived" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Released</label>
                    <input type="date" name="dateReceived" id="dateReceived" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="" value="{{ old('dateReceived') }}">
                    <x-input-error class="mt-2" :messages="$errors->get('dateReceived')" />
                </div> 


                <div class="col-span-2 sm:col-span-1">
                    <label for="timeReceived" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time Released</label>
                    <input type="time" name="timeReceived" id="timeReceived" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="" value="{{ old('timeReceived') }}">
                    <x-input-error class="mt-2" :messages="$errors->get('timeReceived')" />
                </div> 

                <div class="sm:col-span-2">
                    <label for="subjectMatter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject Matter</label>
                    <select id="subjectMatter" name="subjectMatter"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="{{ old('subjectMatter') }}">Select subject Matter</option>
                        <option value="CERTIFICATE">CERTIFICATE</option>
                        <option value="VARIOUS EXAM">VARIOUS EXAM</option>
                        <option value="REQUEST LETTER">REQUEST LETTER</option>
                        <option value="APPROVED FTB">APPROVED FTB</option>
                    </select>
                </div>

                <div class="sm:col-span-2">
                    <label for="statuss" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select id="statuss" name="statuss"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="{{ old('statuss') }}">Select status</option>
                        <option value="PENDING">PENDING</option>
                        <option value="RELEASED">RELEASED</option>
                        <option value="RECEIVED">RECEIVED</option>
                    </select>
                </div>
     
                <div class="sm:col-span-2">
                    <label for="actionUnit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Action Unit</label>
                    <select id="actionUnit" name="actionUnit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="{{ old('actionUnit') }}">Select action unit</option>
                        <option value="LRD - Application">LRD - Application</option>
                        <option value="FAD - Records">FAD - Records</option>
                    </select>
                </div>
       
                <div class="col-span-2 sm:col-span-1">
                <label for="dateReleased" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Released</label>
                <input type="date" name="dateReleased" id="dateReleased" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="" value="{{ old('dateReleased') }}">
                <x-input-error class="mt-2" :messages="$errors->get('dateReleased')" />
            </div> 

            <div class="col-span-2 sm:col-span-1">
                <label for="nameofpersonnel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name of personnel</label>
                <select id="nameofpersonnel" name="nameofpersonnel"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="{{ old('nameofpersonnel') }}">Select category</option>
                    <option value="Myro">Myro</option>
                    <option value="Mary Jane">Mary Jane</option>
                    <option value="Jaycee">Jaycee</option>
                    <option value="Alyssa">Alyssa</option>
                </select>
            </div>

            <div class="sm:col-span-2">
                <label for="initialReceived" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Initial Received</label>
                <input type="text" name="initialReceived" id="initialReceived" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type initial Received" required="" value="{{ old('initialReceived') }}">
                <x-input-error class="mt-2" :messages="$errors->get('initialReceived')" />
            </div>
            
            <div class="sm:col-span-2">
                <label for="trackingNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tracking NO.</label>
                <input type="text" name="trackingNumber" id="trackingNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type tracking number" required="" value="{{ old('trackingNumber') }}">
                <x-input-error class="mt-2" :messages="$errors->get('trackingNumber')" />
            </div>

            </div>
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Add user
                    </button>
                </form>
            </div>
        </section>
    </div>
</div>
</div>
</x-app-layout>
