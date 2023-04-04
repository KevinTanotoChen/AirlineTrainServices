@extends('layouts.main')

@section('container')

<div class="flex justify-center">
    <div class="box-content rounded-xl bg-white bg-opacity-50 border mt-10 mb-10 p-4 h-[400px] w-[280px] shadow-md hover:shadow-lg">
        <form action="" class="grid grid-cols-1 justify-items-center">
            <p class="text-2xl text-center font-semibold mb-10">
                Login
            </p>
            <div class="flex justify-center">
                <div class="bg-[#444444] w-8 h-8 flex justify-center items-center">
                    <img src="img/email-icon.png" alt="" class="w-3">
                </div>
                <input type="text" name="email" id="email" placeholder="Email address" class=" h-8 w-48 p-2 mb-2 bg-[#D9D9D9] placeholder:text-[12px]">
            </div>
            <div class="flex justify-center">
                <div class="bg-[#444444] w-8 h-8 flex justify-center items-center">
                    <img src="img/pass-icon.png" alt="" class="w-3">
                </div>
                <input type="text" name="password" id="password" placeholder="Password" class=" h-8 w-48 p-2 mb-2 bg-[#D9D9D9] placeholder:text-[12px]">
            </div>
            
            <button class="bg-red-400 duration-500 px-4 py-1 mt-36 w-48 hover:bg-red-300 rounded text-lg">
                Login
            </button>
            <div class="flex">
                <p class="text-sm mt-4 mr-2 text-[#B9B9B9]">Don't have an account?</p>
                <a href="/register" class="text-sm mt-4 font-semibold">Register</a>
            </div>
        </form>
    </div>
</div>
@endsection