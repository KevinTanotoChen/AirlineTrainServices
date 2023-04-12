@extends('layouts.main')

@section('container')
    

    <div class="flex justify-center">
        <div class="box-content rounded-xl bg-white bg-opacity-50 border mx-24 p-4 shadow-md hover:shadow-lg w-3/4 my-10">

            <div class="flex flex-col">
                <div class="flex-1">
                    <img src="{{ asset('img/event1.png') }}" alt="" style="height: 15rem; width: 100%" >
                </div>
                <div>

                    <h1 class="text-2xl font-bold">
                        {{ $event->title}}
                    </h1>

                </div>
                <div>

                    {{ $event->content }}

                </div>

            </div>
            
        </div>
    </div>

@endsection