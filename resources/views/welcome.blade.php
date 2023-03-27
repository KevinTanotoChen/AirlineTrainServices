@extends('layouts.main')

@section('container')
    <div class="relative">
        <img src="img/home-image.jpg">
        <div class="absolute inset-0 flex justify-center items-center">
            <div class="box-content h-1/4 w-3/4 rounded-xl bg-white bg-opacity-50">
                <div class="inner-box h-1/5 w-full bg-white rounded-t-xl p-3">
                    <div class="flex ml-10">
                        <div class="flex-1 w-1/3 text-2xl font-semibold">
                            Ticket Type
                        </div>
                        <div class="flex-1 w-1/3 text-2xl font-semibold">
                            Reguler
                        </div>
                        <div class="flex-1 w-1/3 text-2xl font-semibold">
                            Exclusive
                        </div>
                    </div>
                </div>

                <div class="flex ml-10 p-4">
                    <div class="flex-1">
                        <div class="flex-col">
                            <div class="font-semibold">Origin</div>

                            <div class="inline-block relative w-5/6">
                                <select class="appearance-none px-4 py-1 w-full rounded text-gray-500">
                                    <option>Select Origin Station</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.95 7.95l-3.586 3.586-3.586-3.586-1.414 1.414 3.586 3.586-3.586 3.586 1.414 1.414 3.586-3.586 3.586 3.586 1.414-1.414-3.586-3.586 3.586-3.586z"/></svg>
                                </div>
                            </div>

                            <div class="mt-5 font-semibold">Departure Time</div>

                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input datepicker type="text" class="rounded block w-5/6 pl-9 p-1.5" placeholder="Select date">
                            </div>

                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex-col">
                            <div class="font-semibold">Destination</div>

                            <div class="inline-block relative w-5/6">
                                <select class="appearance-none px-4 py-1 w-full rounded text-gray-500">
                                    <option>Select Destination Station</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.95 7.95l-3.586 3.586-3.586-3.586-1.414 1.414 3.586 3.586-3.586 3.586 1.414 1.414 3.586-3.586 3.586 3.586 1.414-1.414-3.586-3.586 3.586-3.586z"/></svg>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex-col">
                            <div class="font-semibold">Total Passenger</div>

                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input datepicker type="text" class="rounded block w-5/6 pl-9 p-1.5" placeholder="Select date">
                            </div>
                            
                            <button class="bg-red-400 duration-500 px-4 py-1 hover:bg-red-300 rounded mt-10">
                                Find Ticket
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection