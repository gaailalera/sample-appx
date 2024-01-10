<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SERVICE REQUEST FORM') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                               <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <section class="bg-white dark:bg-gray-900">
                    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-black">ADD NEW USER</h2>
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                                <div class="sm:col-span-2">
                                    <label for="datefiled" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date filed</label>
                                    <input type="date" name="datefiled" id="datefiled" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type user name" required="" value="{{ old('datefiled') }}">
                                    <x-input-error class="mt-2" :messages="$errors->get('datefiled')" />
                                 </div> 



                                <div class="sm:col-span-2">
                                    <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" name="fullname" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type full name" required="" value="{{ old('fullname') }}">
                                    <x-input-error class="mt-2" :messages="$errors->get('fullname')" />
                                </div>


                                <div class="sm:col-span-2">
                                    <label for="profession" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                    <select id="profession" name="profession" value="{{ old('profession') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option selected="{{ old('profession') }}">Select profession</option>
                                        <option value="AERONAUTICAL ENGINEER">AERONAUTICAL ENGINEER</option>
                                        <option value="AGRICULTURAL & BIOSYSTEMS ENGINEER">AGRICULTURAL & BIOSYSTEMS ENGINEER</option>
                                        <option value="AGRICULTURIST">AGRICULTURIST</option>
                                        <option value="ARCHITECT">ARCHITECT</option>
                                        <option value="CERTIFIED PLANT MECHANIC">CERTIFIED PLANT MECHANIC</option>
                                        <option value="CERTIFIED PUBLIC ACCOUNTANT">CERTIFIED PUBLIC ACCOUNTANT</option>
                                        <option value="CHEMICAL ENGINEER">CHEMICAL ENGINEER</option>
                                        <option value="CHEMICAL TECHNICIAN">CHEMICAL TECHNICIAN</option>
                                        <option value="CHEMIST">CHEMIST</option>
                                        <option value="CIVIL ENGINEER">CIVIL ENGINEER</option>
                                        <option value="CRIMINOLOGIST">CRIMINOLOGIST</option>
                                        <option value="CUSTOMS BROKER">CUSTOMS BROKER</option>
                                        <option value="DENTAL HYGIENIST">DENTAL HYGIENIST</option>
                                        <option value="DENTAL TECHNOLOGIST">DENTAL TECHNOLOGIST</option>
                                        <option value="DENTIST">DENTIST</option>
                                        <option value="ELECTRONICS ENGINEER">ELECTRONICS ENGINEER</option>
                                        <option value="ELECTRONICS TECNICIAN">ELECTRONICS TECNICIAN</option>
                                        <option value="ENVIRONMENTAL PLANNER">ENVIRONMENTAL PLANNER</option>
                                        <option value="FISHERIES TECHNOLOGIST">FISHERIES TECHNOLOGIST</option>
                                        <option value="FORESTER">FORESTER</option>
                                        <option value="GEODETIC ENGINEER">GEODETIC ENGINEER</option>
                                        <option value="GEOLOGIST">GEOLOGIST</option>
                                        <option value="GUIDANCE COUNCELOR">GUIDANCE COUNCELOR</option>
                                        <option value="INTERIOR DESIGNER">INTERIOR DESIGNER</option>
                                        <option value="LANDSCAPE ARCHITECT">LANDSCAPE ARCHITECT</option>
                                        <option value="LIBRARIAN">LIBRARIAN</option>
                                        <option value="MASTER PLUMBER">MASTER PLUMBER</option>
                                        <option value="MECHANICAL ENGINEER">MECHANICAL ENGINEER</option>
                                        <option value="MEDICAL TECHNOLOGIST">MEDICAL TECHNOLOGIST</option>
                                        <option value="METALLURGICAL ENGINEER">METALLURGICAL ENGINEER</option>
                                        <option value="MIDWIFE">MIDWIFE</option>
                                        <option value="MINING ENGINEER">MINING ENGINEER</option>
                                        <option value="NAVAL ARCHITECT">NAVAL ARCHITECT</option>
                                        <option value="NURSE">NURSE</option>
                                        <option value="NUTRITIONIST DIETITIAN">NUTRITIONIST DIETITIAN</option>
                                        <option value="OCCUPATIONAL THERAPIST">OCCUPATIONAL THERAPIST</option>
                                        <option value="OCULAR PHARMACOLOGIST">OCULAR PHARMACOLOGIST</option>
                                        <option value="OPTOMETRIST">OPTOMETRIST</option>
                                        <option value="PHARMACIST">PHARMACIST</option>
                                        <option value="PHYSICAL THERAPIST">PHYSICAL THERAPIST</option>
                                        <option value="PHYSICIAN">PHYSICIAN</option>
                                        <option value="PROFESSIONAL ELECTRIC ENGINEER">PROFESSIONAL ELECTRIC ENGINEER</option>
                                        <option value="PROFESSIONAL TEACHERS">PROFESSIONAL TEACHERS</option>
                                        <option value="PSYCHOLOGIST">PSYCHOLOGIST</option>
                                        <option value="PSYCHOMETRICIAN">PSYCHOMETRICIAN</option>
                                        <option value="RADIOLOGIC TECHNOLOGIST">RADIOLOGIC TECHNOLOGIST</option>
                                        <option value="REAL STATE APPRAISER">REAL STATE APPRAISER</option>
                                        <option value="REAL STATE BROKER">REAL STATE BROKER</option>
                                        <option value="REAL STATE CONSULTANT">REAL STATE CONSULTANT</option>
                                        <option value="REGISTERED ELECTRICAL ENGINEER">REGISTERED ELECTRICAL ENGINEER</option>
                                        <option value="REGISTERED MASTER ELECTRICIAN">REGISTERED MASTER ELECTRICIAN</option>
                                        <option value="RESPIRATORY THERAPIST">RESPIRATORY THERAPIST</option>
                                        <option value="SANITARY ENGINEER">SANITARY ENGINEER</option>
                                        <option value="SOCIAL WORKER">SOCIAL WORKER</option>
                                        <option value="VETERINARIAN">VETERINARIAN</option>
                                        <option value="X-RAY TECHNOLOGIST">X-RAY TECHNOLOGIST</option>                         
                                    </select>
                                </div>
        

                                <div class="sm:col-span-2">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type user email" required="" value="{{ old('email') }}">
                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="contactNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                    <input type="text" maxlength="11" name="contactNumber" id="contactNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type user phone number" required="" 
                                    value="{{ old('contactNumber') }}">
                                    <x-input-error class="mt-2" :messages="$errors->get('contactNumber')" />
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="srfNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SRF Number</label>
                                    <input type="text" name="srfNumber" id="srfNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type FAD" required="" value="{{ old('srfNumber') }}">
                                    <x-input-error class="mt-2" :messages="$errors->get('srfNumber')" />
                                </div>

                                
                              <div class="sm:col-span-2">
                                <label for="datesent" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date sent</label>
                                <input type="date" name="datesent" id="datesent" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type user name" required="" value="{{ old('datesent') }}">
                                <x-input-error class="mt-2" :messages="$errors->get('datesent')" />
                             </div> 


                               <div class="sm:col-span-2">
                                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status / Remarks</label>
                                <select id="text" name="status" value="{{ old('status') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="{{ old('status') }}">Select</option>
                                    <option value="Fixed">Okay</option>
                                    <option value="Pending">Pending</option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('status')" />
                              </div>



                              {{-- <div class="sm:col-span-2">
                                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status/Remarks</label>
                                    <input type="text" name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type user name" required="" value="{{ old('status') }}">
                                    <x-input-error class="mt-2" :messages="$errors->get('status')" />
                                </div>  --}}
                               
                            
                             
                              <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                      <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                Add user
                             </button>
                          </form>
                    </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
