@extends('layouts.main')

@section('container')

<style>
    .next, .prev{
        cursor: pointer ;
        float: left;
    }

    .slider-inner{
        float: left;
        position: relative;
    }

    .slider-inner img{
        display: none;
    }

    .slider-inner img.active{
        display: inline-block;
    }

    .slider-inner img.round{
        border-radius: 10px; 
    }

    .news-content img.{
        width: 100%;
        height: 100%;
        background-size: 100% 100%;
    }

    .home img{
        width: 100%;
        height: 580px;
        object-fit:cover;
    }

    /* .remove-icon input{
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
    } */

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

</style>

<div class="flex flex-col">
    <div class="flex-1 h-1/2">

        <div class="relative home">
            <img src="img/home-image.jpg" class="brightness-75">
            <div class="absolute inset-0 flex justify-center items-center">
                <div class="box-content h-2/5 w-3/4 rounded-xl bg-white bg-opacity-50 shadow-md hover:shadow-lg ">
                    <div class="inner-box h-1/5 w-full bg-white rounded-t-xl px-3 py-2">
                        <div class="flex ml-10">
                            <div class="flex-1 w-1/3 text-2xl font-semibold">
                                Select Your Ticket
                            </div>
                        </div>
                    </div>

                    <form action="/search" method="POST">
                    @csrf
                    <div class="flex ml-10 p-4">
                        <div class="flex-1">
                            <div class="flex-col">
                                <div class="font-semibold text-lg">Origin</div>

    
                                <div class="inline-block relative w-5/6">
                                    <select class="appearance-none px-4 py-1 w-full rounded text-gray-500" name="origin_station">
                                        <option>Select Origin Station</option>
                                        @foreach ($stations as $station)
                                            <option value="{{ $station->id }}">Station {{ $station->id }}</option>
                                        @endforeach
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
    
                                <div class="mt-5 font-semibold text-lg">Departure Time</div>
    
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fa-regular fa-calendar"></i>
                                    </div>
                                    <input datepicker type="text" class="rounded block w-5/6 pl-9 px-4 py-1" placeholder="Select date">
                                </div>

                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex-col">
                                <div class="font-semibold text-lg">Destination</div>
    
                                <div class="inline-block relative w-5/6">
                                    <select class="appearance-none px-4 py-1 w-full rounded text-gray-500" name="destination_station">
                                        <option>Select Destination Station</option>
                                        @foreach ($stations as $station)
                                            <option value="{{ $station->id }}">Station {{ $station->id }}</option>
                                        @endforeach
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex-col">
                                <div class="font-semibold text-lg">Total Passenger</div>

                                <div class="relative">
                                    <input type="text" class="rounded block w-5/6 pl-9 px-4 py-1" value="">
                                    <div class="absolute inset-y-0 left-0 flex items-center w-5/6 justify-between">
                                      <button class="font-bold py-1 px-3 rounded-r" onclick="if(parseInt(this.nextElementSibling.value)>1) {this.nextElementSibling.value = parseInt(this.nextElementSibling.value) - 1}">
                                        <span>-</span>
                                      </button>
                                      <input type="number" class="w-10 text-center font-semibold text-md hover:text-black focus:text-black md:text-basecursor-default flex items-center outline-none" value="1" min="1">
                                      <button class="font-bold py-1 px-3 rounded-r" onclick="this.previousElementSibling.value = parseInt(this.previousElementSibling.value) + 1">
                                        <span>+</span>
                                      </button>
                                    </div>
                                </div>
                                <div class="mt-11">
                                    <button type="submit" class="bg-red-400 duration-500 px-4 py-1 hover:bg-red-300 rounded text-lg">
                                        Find Ticket
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="flex-1">
        <div class="flex mt-10 mx-20 space-x-6">
            <div class="flex-initial">
                <div class="box-content rounded-xl bg-white bg-opacity-50 border p-4 h-56 shadow-md hover:shadow-lg">
                    <p class="text-2xl font-bold">
                        Check Our Promotion <br> For Lower Price
                    </p>
                    <button class="bg-red-400 duration-500 px-4 py-1 hover:bg-red-300 rounded mt-5 text-lg">
                        Check All Promotion
                    </button>
                </div>
            </div>
            <div class="flex-1">
                <div class="box-content rounded-xl bg-white p-4 h-56 flex items-center border shadow-md hover:shadow-lg">

                        <div class="flex-initial">
                            <i class="fa-sharp fa-solid fa-angles-left prev"></i>
                        </div>
                        <div class="flex-1 ml-20">

                            <div class="slider-inner">
                                <img src="img/slider-1.png" class="active ml-5 round shadow-md hover:shadow-lg" alt="">
                                <img src="img/slider-2.png" class="active ml-5 round shadow-md hover:shadow-lg" alt="">
                                <img src="img/slider-3.png" class="ml-5 round shadow-md hover:shadow-lg" alt="">
                                <img src="img/slider-4.png" class="ml-5 round shadow-md hover:shadow-lg" alt="">
                                <img src="img/slider-5.png" class="ml-5 round shadow-md hover:shadow-lg" alt="">
                            </div>

                        </div>
                        <div class="flex-initial">
                            <i class="fa-sharp fa-solid fa-angles-right next"></i>
                        </div>
                
                </div>
            </div>
        </div>      
    </div>

    <div class="flex-1 mx-20 mt-10  ">
        <span class="text-2xl font-bold"> News & Event</span>
        <p>
            Rencana ke Singapura, Malaysia, atau Thailand? Nginep di hotel ini, diskon hingga 70%+IDR 325rb!
        </p>
    </div>

    <div class="flex-1 mx-20">

        <div class="flex mt-5 space-x-6">
            <div class="flex-1">        
                <div class="box-content rounded-xl bg-white border h-96 shadow-md hover:shadow-lg mb-10">
                    <div class="flex-col">
                        <div class="flex-1">
                            <img src="img/home-news1.jpg" alt="" style="height: 15rem; width: 100%; border-radius: 5px 5px 0px 0px" >
                        </div>
                        <div class="flex-1 p-4 text-center">
                            <h3 class="font-semibold"> Lorem Ipsum </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>     
                </div>
            </div>
            <div class="flex-1">
                <div class="box-content rounded-xl bg-white border h-96 shadow-md hover:shadow-lg mb-10">
                    
                    <div class="flex-col">
                        <div class="flex-1">
                            <img src="img/home-news1.jpg" alt="" style="height: 15rem; width: 100%; border-radius: 5px 5px 0px 0px" >
                        </div>
                        <div class="flex-1 p-4 text-center">
                            <h3 class="font-semibold"> Lorem Ipsum </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>  


                </div>
            </div>
            <div class="flex-1">
                <div class="box-content rounded-xl bg-white border  h-96 shadow-md hover:shadow-lg mb-10">
                    
                    <div class="flex-col">
                        <div class="flex-1">
                            <img src="img/home-news1.jpg" alt="" style="height: 15rem; width: 100%; border-radius: 5px 5px 0px 0px" >
                        </div>
                        <div class="flex-1 p-4 text-center">
                            <h3 class="font-semibold"> Lorem Ipsum </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>  


                </div>
            </div>

        </div>
    </div>
</div>
    
<script>
    
    $(function(){

        $('.next').on('click', function(){
            var currentImg = $('.active');
            var nextImg = currentImg.next();
            var firstImg = currentImg.prevAll().last();

            if(nextImg.length > 0){
                currentImg.removeClass('active').css('z-index', '-10');
                nextImg.addClass('active').css('z-index', '10');
            }
            else{
                currentImg.removeClass('active').css('z-index', '-10');
                firstImg.addClass('active').css('z-index', '10');
            }   
        });

        $('.prev').on('click', function(){
            var currentImg = $('.active');
            var prevImg = currentImg.prev();
            var firstImg = currentImg.nextAll().last();

            if(prevImg.length > 0){
                currentImg.removeClass('active').css('z-index', '-10');
                prevImg.addClass('active').css('z-index', '10');
            }
            else{
                currentImg.removeClass('active').css('z-index', '-10');
                firstImg.addClass('active').css('z-index', '10');
            }   
        });
    });

</script>   

@endsection