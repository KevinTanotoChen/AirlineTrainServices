@extends('layouts.main')

@section('container')
    

    <div class="flex justify-center">
        <div class="box-content rounded-xl bg-white bg-opacity-50 border mx-24 p-4 shadow-md hover:shadow-lg w-3/4 my-10">

            <div class="flex flex-col">
                <div class="flex-1">
                    <img src="{{ asset('storage/' . $promo->image) }}" alt="" style="height: 15rem; width: 100%" >
                </div>
                <div>

                    <h1 class="text-2xl font-bold">
                        {{ $promo->title}}
                    </h1>

                </div>
                <div>

                    {{ $promo->content }}

                </div>

                <div>
                    Promo Code: {{ $promo->code }}
                </div>

                <div>
                    Promo Discount: {{ $promo->discount_price }}
                </div>

            </div>
            
        </div>
    </div>

@endsection