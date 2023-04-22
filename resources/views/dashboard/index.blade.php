@extends('layouts.adminMain')

@section('container')

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
        <div class="w-4/5 bg-gray-100 p-4" id="content">
          <h1 class="text-3xl font-semibold mb-4">Dashboard</h1>
          <p>Welcome to the dashboard.</p>
        </div>
    </div>

@endsection