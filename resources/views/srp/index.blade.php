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

    <div class="flex-1 my-10">

        <div class="flex justify-start">
            <div class="box-content rounded-xl bg-white bg-opacity-50 border mx-24 p-4 shadow-md hover:shadow-lg">
                <div class="flex-col space-y-2">
                    <div class="flex-1 text-xl font-bold">
                        Ticket Summary
                    </div>
                    <div class="flex-1 text-lg">
                        {{ date('l, F j, Y', strtotime($_POST['date'])) }}
                    </div>
                    <div class="flex-1 text-lg">
                        Station {{ $_POST['origin_station'] }} -> Station {{ $_POST['destination_station'] }}
                    </div>
                    <div class="flex-1 text-lg">
                        {{ $_POST['passengers'] }} Passenger{{ $_POST['passengers'] > 1 ? 's' : '' }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <div class="flex-1 mb-10">

            
            <a href="/" class="bg-red-400 duration-500 px-5 py-2 hover:bg-red-300 rounded text-lg mx-24">
                Back to find ticket
            </a>   

    </div>

    <div class="flex-1 mb-10">

        <div class="flex justify-center">
            <div class="box-content rounded-xl bg-white bg-opacity-50 border mx-24 w-full p-4 shadow-md hover:shadow-lg">
                <div class="flex items-center justify-center">

                    <table class="table-fixed w-11/12">
                        <thead class="text-center">
                          <tr class="border-b">
                            <th>Train</th>
                            <th>Departure</th>
                            <th>Arrival</th>
                            {{-- <th>Origin</th>
                            <th>Destination</th> --}}
                            <th>Seat Availability</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($schedules as $schedule)

                                <tr class="border-b">
                                    <td>{{ $schedule->train_id }}</td>
                                    <td>{{ $schedule->departure_time }}</td>
                                    <td>{{ $schedule->arrival_time }}</td>
                                    {{-- <td>{{ $schedule->origin_station_id }}</td>
                                    <td>{{ $schedule->destination_station_id }}</td> --}}
                                    <td>{{ $schedule->total_seat}}</td>
                                    <td>10000</td>
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