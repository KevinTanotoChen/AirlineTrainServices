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
        <form action="" method="GET">
            @csrf
            <div class="flex items-center border rounded-lg px-3 py-2 bg-white">
                <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Search" name="s">
                <button class="flex-shrink-0 bg-red-500 hover:bg-red-700 border-red-500 hover:border-red-700 text-sm border-4 text-white py-1 px-2 rounded" type="button">
                Search
                </button>
            </div>
        </form>
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
                            {{-- <th>Seat Availability</th>
                            <th>Price</th>
                            <th></th> --}}
                          </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($schedules as $schedule)

                                <tr class="border-b">
                                    <td>{{ $schedule->departure_time }}</td>
                                    <td>{{ $schedule->arrival_time }}</td>
                                    {{-- <td>{{ $schedule->find($station_id)->pivot->total_seat}}</td> --}}
                                    {{-- <td>10000</td> --}}
                                    <td>
                                        <div class="my-2">
                                            <a href="/transaction" class="bg-red-400 duration-500 px-3 py-1 hover:bg-red-300 rounded">
                                                Select
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                
                            @endforeach
                          
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection