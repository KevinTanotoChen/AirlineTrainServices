@extends('layouts.adminMain')

@section('container')
<style>
    .product-image {
        margin-bottom: 10px;
        width: 10em;
        height: 10em;
        border: 1px solid #000000;
    }
</style>

<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-1/6 bg-white">
      <div class="p-4">
        <h1 class="text-lg font-bold">Dashboard</h1>
        <nav class="mt-4">
          <a class="block py-2 text-sm font-semibold text-gray-900 hover:bg-gray-200" id="transaction" href="/dashboard/transaction">Transaction</a>
          <a class="block py-2 text-sm font-semibold text-gray-900 hover:bg-gray-200" id="news" href="/dashboard/news-event">News & Event</a>
          <a class="block py-2 text-sm font-semibold text-gray-900 hover:bg-gray-200" id="promotion" href="/dashboard/promotion">Promotion</a>
        </nav>
      </div>
    </div>
    <!-- Main Content -->
   
    <div class="container mx-auto mt-10">
        <div class="w-full max-w-lg">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="card-header font-bold text-xl mb-6">{{ __('Edit News Event') }}</div>
                <form method="POST" action="{{ route('news-event.update', $event->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-bold mb-2">{{ __('Title') }}</label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $event->title }}" required autocomplete="title" autofocus style="border: 1px solid #000000;">
    
                        @error('title')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
    
                    <div class="mb-4">
                        <label for="content" class="block text-gray-700 font-bold mb-2">{{ __('Content') }}</label>
                        <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" rows="6" required style="border: 1px solid #000000;">{{ $event->content }}</textarea>
    
                        @error('content')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
    
                    <div class="mb-4">
                        <img src="{{ asset('storage/'.$event->image) }}" alt="News Image" class="product-image">
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 font-bold mb-2">{{ __('Image') }}</label>
                        <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" accept="image/*">
    
                        @error('image')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Edit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
