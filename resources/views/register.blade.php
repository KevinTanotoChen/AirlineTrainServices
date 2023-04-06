@extends('layouts.main')

@section('container')

<div class="grid grid-col-1 justify-items-center">
    @error('user_name')
            <div class="bg-red-100 text-sm border border-red-400 text-red-700 px-4 py-3 mt-3 w-[280px] rounded relative" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @enderror
        @error('password')
            <div class="bg-red-100 text-sm border border-red-400 text-red-700 px-4 py-3 mt-3 w-[280px] rounded relative" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @enderror
        @error('email')
            <div class="bg-red-100 text-sm border border-red-400 text-red-700 px-4 py-3 mt-3 w-[280px] rounded relative" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @enderror
        @error('phone_number')
            <div class="bg-red-100 text-sm border border-red-400 text-red-700 px-4 py-3 mt-3 w-[280px] rounded relative" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @enderror
    <div class="box-content rounded-xl bg-white bg-opacity-50 border mt-10 mb-10 p-4 h-[400px] w-[280px] shadow-md hover:shadow-lg">
        <form action="/register" method="POST" class="grid grid-cols-1 justify-items-center">
            @csrf
            <p class="text-2xl text-center font-semibold mb-10">
                Register
            </p>
            <div class="flex justify-center">
                <div class="bg-[#444444] w-8 h-8 flex justify-center items-center">
                    <img src="img/user-icon.png" alt="" class="w-3">
                </div>
                <input type="text" name="user_name" id="user_name" placeholder="Username" class=" h-8 w-48 p-2 mb-2 bg-[#D9D9D9] text-[12px] placeholder:text-[12px]" value="{{ old('user_name') }}" autofocus>
            </div>
            <div class="flex justify-center">
                <div class="bg-[#444444] w-8 h-8 flex justify-center items-center">
                    <img src="img/pass-icon.png" alt="" class="w-3">
                </div>
                <input type="password" name="password" id="password" placeholder="Password" class=" h-8 w-48 p-2 mb-2 bg-[#D9D9D9] text-[12px] placeholder:text-[12px]" required>
            </div>
            <div class="flex justify-center">
                <div class="bg-[#444444] w-8 h-8 flex justify-center items-center">
                    <img src="img/email-icon.png" alt="" class="w-3">
                </div>
                <input type="email" name="email" id="email" placeholder="Email Address" class=" h-8 w-48 p-2 mb-2 bg-[#D9D9D9] text-[12px] placeholder:text-[12px]" value="{{ old('email') }}" required>
            </div>
            <div class="flex justify-center">
                <div class="bg-[#444444] w-8 h-8 flex justify-center items-center">
                    <img src="img/phone-icon.png" alt="" class="w-3">
                </div>
                <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number" class=" h-8 w-48 p-2 mb-2 bg-[#D9D9D9] text-[12px] placeholder:text-[12px]" value="{{ old('phone_number') }}" required>
            </div>
            <button class="bg-red-400 duration-500 px-4 py-1 mt-16 w-48 hover:bg-red-300 rounded text-lg">
                Register
            </button>
            <div class="flex">
                <p class="text-sm mt-4 mr-2 text-[#B9B9B9]">Already have an account?</p>
                <a href="/login" class="text-sm mt-4 font-semibold">Login</a>
            </div>
        </form>
    </div>
</div>
@endsection