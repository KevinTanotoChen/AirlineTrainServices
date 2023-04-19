@extends('layouts.main')

@section('container')
<style>
    .title img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 0px 0px 20px 20px
    }
</style>

<div class="flex flex-col">
    <div class="flex-1">

        <div class="relative title">
            <img src="img/home-image.jpg" alt="" class="brightness-50">
            <div class="absolute inset-0 flex justify-start items-center text-white p-20">
                <div class="flex flex-col">

                    <div class="flex-1">
                        <h1 class="text-2xl font-bold">News & Event</h1>
                    </div>
                    <div class="flex-1">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa exercitationem illum minus cupiditate.</p>
                    </div>

                </div>

            </div>
        </div>

        <div class="grid grid-cols-3 justify-items-center my-10 mx-20">
            @foreach ($events as $event)
                <div class="flex flex-col justify-items-center p-4 text-center">
                    <div>

                        <a href="{{ route('event.show', $event->id) }}"><img src="{{ asset('storage/' . $event->image) }}" alt="" class="w-full"></a>

                    </div>
                    <div>

                        <a href="{{ route('event.show', $event->id) }}"><h3 class="text-xl font-bold">{{ $event->title }}</h3></a>

                    </div>
                    <div>

                        <a href="{{ route('event.show', $event->id) }}"><p class="text-base">{{ $event->excerpt }}</p></a>

                    </div>
                </div>
            @endforeach
        </div>

        @endsection