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
    <div class="flex-1">

        <div class="relative title">
            <img src="img/home-image.jpg" alt="" class="brightness-50">
            <div class="absolute inset-0 flex justify-start items-center text-white p-20">
                <div class="flex flex-col">

                    <div class="flex-1">
                        <h1 class="text-2xl font-bold">About Us</h1>
                    </div>
                    <div class="flex-1">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa exercitationem illum minus cupiditate.</p>
                    </div>

                </div>
                
            </div>
        </div>

    </div>
    <div class="flex-1 my-10">

        <div class="flex flex-col justify-center items-center text-center">
            <div class="shrink w-1/2 font-semibold">
                Welcome to our website for airport train service! We are dedicated to providing a convenient and hassle-free way for travelers to get to and from the airport.
            </div>
            <div class="shrink w-1/2 mt-10">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptatem corporis nobis beatae, iusto in quod. Repellendus, velit beatae? Incidunt repellendus alias inventore vero error reiciendis praesentium possimus nostrum ad.
            </div>
    
        </div>

    </div>
</div>

@endsection