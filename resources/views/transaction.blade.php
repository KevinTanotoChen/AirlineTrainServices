@extends('layouts.main')

@section('container')


<div class="flex flex-col">

    <div class="flex-1 my-10">

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
                                5 X 20IDR
                            </div>

                        </div>
                    </div>

                    <div class="flex-1">
                        <div class="flex justify-between">

                            <div>
                                Total Price
                            </div>
                            <div>
                                IDR 100K
                            </div>

                        </div>
                    </div>

                    <div class="flex-1 mt-10">
                        <div class="flex justify-center">
                            <div class="box-content rounded-xl bg-white bg-opacity-50 border p-9 shadow-md w-full">

                                <div class="flex items-center justify-around">

                                    <div>
                                        <input class="border-b border-gray-400 rounded-none bg-white focus:outline-none focus:ring-0 px-2 py-1 w-96" id="promo" type="text" placeholder="Enter your Promo/Voucher Code">
                                    </div>
                                    <div>
                                        <button class="py-1 px-14 bg-red-400 hover:bg-red-300 rounded text-lg">Apply</button>
                                    </div>
        
                                </div>

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
        
    </div>
</div>

@endsection