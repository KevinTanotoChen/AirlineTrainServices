{{-- @dd($transactions) --}}

{{-- @dd($transactions->isEmpty()) --}}


@extends('layouts.main')

@section('container')
    <div class="flex-1 mb-10">

        <div class="mt-10 flex justify-center">
            <div class="box-content rounded-xl bg-white bg-opacity-50 border mx-24 w-full p-4 shadow-md hover:shadow-lg">
                <div class="flex items-center justify-center">
                    @if ($transactions->isEmpty())
                        <h1>There are no transactions</h1>
                    @else
                        <table class="table-fixed w-11/12">
                            <thead class="text-center">
                                <tr class="border-b">
                                    <th>Date</th>
                                    <th>Origin Station</th>
                                    <th>Destination Station</th>
                                    <th>Departure Time</th>
                                    <th>Arrival Time</th>
                                    <th>Seats</th>
                                    <th>Payment</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($transactions as $transaction)
                                    <tr class="border-b">
                                        <td>{{ date('l, F j, Y', strtotime($transaction->ticket->date)) }}</td>
                                        <td>{{ $transaction->ticket->origin_station_id }}</td>
                                        <td>{{ $transaction->ticket->destination_station_id }}</td>
                                        <td>{{ $transaction->ticket->departure_time }}</td>
                                        <td>{{ $transaction->ticket->arrival_time }}</td>
                                        <td>{{ $transaction->ticket->seat }}</td>
                                        <td>{{ $transaction->payment_type }}</td>
                                        <td>{{ $transaction->price }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>

    </div>
@endsection
