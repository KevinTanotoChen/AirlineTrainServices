{{-- @foreach ($transactions as $transaction)
    <p>{{$transaction->user->user_name}}</p>
@endforeach --}}

@extends('layouts.main')

@section('container')
    <div class="flex flex-col">

        <div class="flex-1 my-10">

            <div class="flex justify-center">
                <div class="box-content rounded-xl bg-white bg-opacity-50 border mx-24 p-4 shadow-md hover:shadow-lg w-3/4">

                    <div class="flex flex-col p-2">
                        <div class="flex-1">

                            TICKET SUMMARY

                        </div>
                        <div class="flex-1 mt-3">
                            <div class="flex justify-between">

                                <div>
                                    Date
                                </div>
                                <div>
                                    {{ date('l, F j, Y', strtotime($date))}}
                                </div>

                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between">

                                <div>
                                    Origin Station
                                </div>
                                <div>
                                    Station {{ $origin_station }}
                                </div>

                            </div>
                        </div>

                        <div class="flex-1">
                            <div class="flex justify-between">
                                <div>
                                    Destination Station
                                </div>
                                <div>
                                    Station {{ $destination_station }}
                                </div>
                            </div>
                        </div>

                        <div class="flex-1">
                            <div class="flex justify-between">
                                <div>
                                    Departure Time
                                </div>
                                <div>
                                    {{ $departure_time }}
                                </div>
                            </div>
                        </div>

                        <div class="flex-1">
                            <div class="flex justify-between">
                                <div>
                                    Arrival Time
                                </div>
                                <div>
                                    {{ $arrival_time }}
                                </div>
                            </div>
                        </div>

                        <div class="flex-1">
                            <div class="flex justify-between">
                                <div>
                                    Total Ordered Seat
                                </div>
                                <div>
                                    {{ $seat_order }}
                                </div>
                            </div>
                        </div>



                    </div>

                </div>
            </div>

        </div>


        <div class="flex-1 mb-10">

            <div class="flex justify-center">
                <div class="box-content rounded-xl bg-white bg-opacity-50 border mx-24 p-4 shadow-md hover:shadow-lg w-3/4">

                    <div class="flex flex-col p-2">
                        <div class="flex-1">

                            PRICE DETAIL

                        </div>
                        <div class="flex-1 mt-3">
                            <div class="flex justify-between">

                                <div>
                                    Departure Passenger
                                </div>
                                <div>
                                    {{ $seat_order }} X {{ $price }}
                                </div>

                            </div>
                        </div>

                        <div class="flex-1">
                            <div class="flex justify-between">

                                <div>
                                    Promo
                                </div>
                                <div>
                                    {{-- -IDR {{ session()->get('promo')['discount'] }} --}}
                                    -IDR {{ $discount }}
                                    @if (session()->has('promo'))
                                        <form action="{{ route('promo-destroy') }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">Remove Promo</button>
                                        </form>
                                    @endif

                                </div>



                            </div>
                        </div>

                        <div class="flex-1">
                            <div class="flex justify-between">

                                <div>
                                    Total Price
                                </div>
                                <div>
                                    IDR {{ $seat_order * $price - $discount }}
                                </div>

                            </div>
                        </div>

                        <div class="flex-1 mt-10">
                            <div class="flex justify-center">
                                <div class="box-content rounded-xl bg-white bg-opacity-50 border p-9 shadow-md w-full">
                                    <form action="{{ route('promo-store') }}" method="POST">
                                        @csrf
                                        <div class="flex items-center justify-around">
                                            <div>
                                                <input
                                                    class="border-b border-gray-400 rounded-none bg-white focus:outline-none focus:ring-0 px-2 py-1 w-96"
                                                    name="promo_code" id="promo_code" type="text"
                                                    placeholder="Enter your Promo/Voucher Code">
                                                @if (session()->has('error_code'))
                                                    <div class="invalid-feedback text-red-500">
                                                        {{ session()->get('error_code') }}
                                                    </div>
                                                @endif

                                                @if (session()->has('success_message'))
                                                    <div class="spacer"></div>
                                                    <div class="alert alert-success">
                                                        {{ session()->get('success_message') }}
                                                    </div>
                                                @endif

                                            </div>
                                            <div>
                                                <button
                                                    class="py-1 px-14 bg-red-400 hover:bg-red-300 rounded text-lg">Apply</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        {{-- <div class="flex-1 mb-10">

            <div class="flex justify-center">
                <div class="box-content rounded-xl bg-white bg-opacity-50 border mx-24 p-4 shadow-md hover:shadow-lg w-3/4">

                    <div class="flex flex-col space-y-4 p-2">
                        <div class="flex-1">

                            CHOOSE PAYMENT METHOD

                        </div>

                        <div class="flex-1 border-b py-4 px-6">
                            <div class="flex justify-between">

                                <div>
                                    <div flex-col>
                                        <div class="font-bold">
                                            Debit/ Credit/ Direct Debit
                                        </div>
                                        <div class="text-sm">
                                            Online Channel
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>

                            </div>
                        </div>

                        <div class="flex-1 border-b py-4 px-6">
                            <div class="flex justify-between">

                                <div>
                                    <div flex-col>
                                        <div class="font-bold">
                                            QRIS
                                        </div>
                                        <div class="text-sm">
                                            QR Code Indonesia Standard
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>

                            </div>
                        </div>

                        <div class="flex-1 py-4 px-6">
                            <div class="flex justify-between">

                                <div>
                                    <div flex-col>
                                        <div class="font-bold">
                                            ATM & Digital Payment
                                        </div>
                                        <div class="text-sm">
                                            ATM and Digital Payment Channel
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div> --}}

        <div class="flex-1 mb-10">

            <div class="flex justify-center">
                <div class="box-content rounded-xl bg-white bg-opacity-50 border mx-24 p-4 shadow-md hover:shadow-lg w-3/4">

                    <div class="flex flex-col space-y-4 p-2">
                        <div class="flex-1">

                            CHOOSE PAYMENT METHOD

                        </div>

                        <div class="flex-1 border-b py-4 px-6">
                            <div class="">

                                <div>
                                    <form action="/transaction" method="POST">
                                        @csrf
                                        <input type="hidden" name="price" id="price"
                                            value="{{ $seat_order * $price - $discount }}">
                                        <input type="hidden" name="user_id" id="user_id"
                                            value="{{ auth()->user()->id }}">
                                        <input type="hidden" name="promotion_id" id="promotion_id"
                                            value="{{ session()->has('promo') ? session()->get('promo')['promo_id'] : '' }}">
                                        <input type="hidden" name="origin_station" id="origin_station"
                                            value="{{ $origin_station }}">
                                        <input type="hidden" name="destination_station" id="destination_station"
                                            value="{{ $destination_station }}">
                                        <input type="hidden" name="train_id" id="train_id"
                                            value="{{ $train_id }}">
                                        <input type="hidden" name="arrival_time" id="arrival_time"
                                            value="{{ $arrival_time }}">
                                        <input type="hidden" name="departure_time" id="departure_time"
                                            value="{{ $departure_time }}">
                                        <input type="hidden" name="seat_order" id="seat_order"
                                            value="{{ $seat_order }}">
                                        <input type="hidden" name="date" id="date"
                                            value="{{ $date }}">

                                        <div class="flex items-center mb-4">
                                            <input id="debit-card" type="radio" value="Debit Card" name="payment_type"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="debit-card"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Debit
                                                Card</label>
                                        </div>

                                        <div class="flex items-center mb-4">
                                            <input id="credit-card" type="radio" value="Credit Card" name="payment_type"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="credit-card"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Credit
                                                Card</label>
                                        </div>

                                        <div class="flex items-center mb-4">
                                            <input id="gopay" type="radio" value="GoPay" name="payment_type"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="gopay"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">GoPay</label>
                                        </div>

                                        @error('payment_type')
                                            <div class="invalid-feedback text-red-500">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <div class="flex justify-end">
                                            <button type="submit"
                                                class="py-1 px-14 bg-red-400 hover:bg-red-300 rounded text-lg">Pay</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>




                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
