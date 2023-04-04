@extends('layouts.main')

@section('container')

<style>
    .title img{
        width: 100%;
        height: 200px;
        object-fit:cover;
        border-radius: 0px 0px 20px 20px
    }
</style>

<div class="flex flex-col">
    {{-- <div class="flex-1">

        <div class="relative title">
            <img src="img/home-image.jpg" alt="" class="brightness-50">
            <div class="absolute inset-0 flex justify-start items-center text-white p-20">
                <div class="flex flex-col">

                    <div class="flex-1">
                        <h1 class="text-2xl font-bold">Choose Schedule</h1>
                    </div>

                </div>
                
            </div>
        </div>

    </div> --}}

    <div class="flex-1 my-10">

        <div class="flex justify-start">
            <div class="box-content rounded-xl bg-white bg-opacity-50 border mx-24 p-4 shadow-md hover:shadow-lg">
                <div class="flex-col">
                    <div class="flex-1">
                        Ticket Summary
                    </div>
                    <div class="flex-1">
                        Wednesday, April 5, 2023
                    </div>
                    <div class="flex-1">
                        Sudirman -> Duri
                    </div>
                    <div class="flex-1">
                        1  Passenger
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="flex-1 mb-10">

        <div class="flex justify-center">
            <div class="box-content rounded-xl bg-white bg-opacity-50 border mx-24 w-full p-4 shadow-md hover:shadow-lg">
                <div class="flex items-center justify-center">

                    <table class="table-fixed w-11/12">
                        <thead class="text-center">
                          <tr class="border-b">
                            <th>Departure</th>
                            <th>Arrival</th>
                            <th>Seat Availability</th>
                            <th>Price</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <tr class="border-b">
                            <td>06:19</td>
                            <td>06:19</td>
                            <td>180</td>
                            <td>10000</td>
                            <td>
                                <div class="my-2">
                                    <a href="/transaction" class="bg-red-400 duration-500 px-3 py-1 hover:bg-red-300 rounded">
                                        Select
                                    </a>
                                </div>
                            </td>
                          </tr>
                          <tr class="border-b">
                            <td>07:30</td>
                            <td>07:30</td>
                            <td>180</td>
                            <td>10000</td>
                            <td>
                                <div class="my-2">
                                    <a href="/transaction" class="bg-red-400 duration-500 px-3 py-1 hover:bg-red-300 rounded">
                                        Select
                                    </a>
                                </div>
                            </td>
                          </tr>
                          <tr class="border-b">
                            <td>08:10</td>
                            <td>08:10</td>
                            <td>180</td>
                            <td>10000</td>
                            <td>
                                <div class="my-2">
                                    <a href="/transaction" class="bg-red-400 duration-500 px-3 py-1 hover:bg-red-300 rounded">
                                        Select
                                    </a>
                                </div>
                            </td>  
                          </tr>
                          <tr class="border-b">
                            <td>08:10</td>
                            <td>08:10</td>
                            <td>180</td>
                            <td>10000</td>
                            <td>
                                <div class="my-2">
                                    <a href="/transaction" class="bg-red-400 duration-500 px-3 py-1 hover:bg-red-300 rounded">
                                        Select
                                    </a>
                                </div>
                            </td> 
                          </tr>
                          <tr class="border-b">
                            <td>08:10</td>
                            <td>08:10</td>
                            <td>180</td>
                            <td>10000</td>
                            <td>
                                <div class="my-2">
                                    <a href="/transaction" class="bg-red-400 duration-500 px-3 py-1 hover:bg-red-300 rounded">
                                        Select
                                    </a>
                                </div>
                            </td> 
                          </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection