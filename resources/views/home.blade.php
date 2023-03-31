@extends('layouts.main')

@section('container')

<style>
    .container{
        display: flex;
        justify-content: center;
    }

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

</style>

<div class="flex flex-col">
    <div class="flex-1 h-1/2">

        <div class="relative">
            <img src="img/home-image.jpg">
            <div class="absolute inset-0 flex justify-center items-center">
                <div class="box-content h-2/5 w-3/4 rounded-xl bg-white bg-opacity-50 shadow-md hover:shadow-lg">
                    <div class="inner-box h-1/5 w-full bg-white rounded-t-xl p-3">
                        <div class="flex ml-10">
                            <div class="flex-1 w-1/3 text-2xl font-semibold">
                                Ticket Type
                            </div>
                            <div class="flex-1 w-1/3 text-2xl font-semibold">
                                Reguler
                            </div>
                            <div class="flex-1 w-1/3 text-2xl font-semibold">
                                Exclusive
                            </div>
                        </div>
                    </div>
    
                    <div class="flex ml-10 p-4">
                        <div class="flex-1">
                            <div class="flex-col">
                                <div class="font-semibold">Origin</div>
    
                                <div class="inline-block relative w-5/6">
                                    <select class="appearance-none px-4 py-1 w-full rounded text-gray-500">
                                        <option>Select Origin Station</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.95 7.95l-3.586 3.586-3.586-3.586-1.414 1.414 3.586 3.586-3.586 3.586 1.414 1.414 3.586-3.586 3.586 3.586 1.414-1.414-3.586-3.586 3.586-3.586z"/></svg>
                                    </div>
                                </div>
    
                                <div class="mt-5 font-semibold">Departure Time</div>
    
                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <input datepicker type="text" class="rounded block w-5/6 pl-9 p-1.5" placeholder="Select date">
                                </div>

                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex-col">
                                <div class="font-semibold">Destination</div>
    
                                <div class="inline-block relative w-5/6">
                                    <select class="appearance-none px-4 py-1 w-full rounded text-gray-500">
                                        <option>Select Destination Station</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.95 7.95l-3.586 3.586-3.586-3.586-1.414 1.414 3.586 3.586-3.586 3.586 1.414 1.414 3.586-3.586 3.586 3.586 1.414-1.414-3.586-3.586 3.586-3.586z"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex-col">
                                <div class="font-semibold">Total Passenger</div>
    
                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <input datepicker type="text" class="rounded block w-5/6 pl-9 p-1.5" placeholder="Select date">
                                </div>
                                
                                <button class="bg-red-400 duration-500 px-4 py-1 hover:bg-red-300 rounded mt-10">
                                    Find Ticket
                                </button>
                            </div>
                        </div>
                    </div>
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
                        <div class="flex-1 p-4">
                            <p class="text-center">
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
                        <div class="flex-1 p-4">
                            <p class="text-center">
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
                        <div class="flex-1 p-4">
                            <p class="text-center">
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