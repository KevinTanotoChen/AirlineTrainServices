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
      <h1 class="text-3xl font-semibold mb-4">Transaction</h1>
      <table class="w-full border-collapse">
        <thead class="text-left">
          <tr>
            <th class="border-b-2 border-gray-200 px-4 py-2">ID</th>
            <th class="border-b-2 border-gray-200 px-4 py-2">User Id</th>
            <th class="border-b-2 border-gray-200 px-4 py-2">Ticket Id</th>
            <th class="border-b-2 border-gray-200 px-4 py-2">Promotion Id</th>
            <th class="border-b-2 border-gray-200 px-4 py-2">Payment Type</th>
            <th class="border-b-2 border-gray-200 px-4 py-2">Price</th>
            <th class="border-b-2 border-gray-200 px-4 py-2"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td class="border-b border-gray-200 px-4 py-2">{{ $transaction->id }}</td>
                    <td class="border-b border-gray-200 px-4 py-2">{{ $transaction->user_id }}</td>
                    <td class="border-b border-gray-200 px-4 py-2">{{ $transaction->ticket_id }}</td>
                    <td class="border-b border-gray-200 px-4 py-2">{{ $transaction->promotion_id }}</td>
                    <td class="border-b border-gray-200 px-4 py-2">{{ $transaction->payment_type }}</td>
                    <td class="border-b border-gray-200 px-4 py-2">{{ $transaction->price }}</td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
    {{ $transactions->links() }}
    </div>
</div>
@endsection