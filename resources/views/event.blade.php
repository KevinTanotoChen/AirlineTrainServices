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

        <div class="grid grid-cols-3 justify-items-center mt-10 mb-10">
            <div class="grid grid-cols-1 p-4 justify-items-center">
                <img src="img/event1.png" alt="">
                <p class="text-2xl text-center font-bold mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
            </div>
            <div class="grid grid-cols-1 p-4 justify-items-center">
                <img src="img/event2.png" alt="">
                <p class="text-2xl text-center font-bold mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
            </div>
            <div class="grid grid-cols-1 p-4 justify-items-center">
                <img src="img/event3.png" alt="">
                <p class="text-2xl text-center font-bold mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
            </div>
            <div class="grid grid-cols-1 p-4 justify-items-center">
                <img src="img/event4.png" alt="">
                <p class="text-2xl text-center font-bold mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
            </div>
            <div class="grid grid-cols-1 p-4 justify-items-center">
                <img src="img/event1.png" alt="">
                <p class="text-2xl text-center font-bold mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
            </div>
            <div class="grid grid-cols-1 p-4 justify-items-center">
                <img src="img/event2.png" alt="">
                <p class="text-2xl text-center font-bold mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
            </div>
        </div>

        @endsection