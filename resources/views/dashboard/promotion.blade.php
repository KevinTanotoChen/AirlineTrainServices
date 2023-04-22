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
      <h1 class="text-3xl font-semibold mb-4">Promotion</h1>
      <table class="w-full border-collapse">
        <thead class="text-left">
          <tr>
            <th class="border-b-2 border-gray-200 px-4 py-2">#</th>
            <th class="border-b-2 border-gray-200 px-4 py-2">Title</th>
            <th class="border-b-2 border-gray-200 px-4 py-2">Code</th>
            <th class="border-b-2 border-gray-200 px-4 py-2">Description</th>
            <th class="border-b-2 border-gray-200 px-4 py-2">Discount Price</th>
            <th class="border-b-2 border-gray-200 px-4 py-2">Image</th>
            <th class="border-b-2 border-gray-200 px-4 py-2"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border-b border-gray-200 px-4 py-2">1</td>
            <td class="border-b border-gray-200 px-4 py-2">John Doe</td>
            <td class="border-b border-gray-200 px-4 py-2">john@example.com</td>
            <td class="border-b border-gray-200 px-4 py-2">Admin</td>
            <td class="border-b border-gray-200 px-4 py-2">3000</td>
            <td class="border-b border-gray-200 px-4 py-2">*kasih liat imagenya*</td>
            <td class="border-b border-gray-200 px-4 py-2">
    
                <div class="flex flex-row justify-center space-x-2">
    
                    <div>
                        <div class="my-1">
                            <a href="/transaction" class="bg-red-400 duration-500 px-3 py-1 hover:bg-red-300 rounded">
                                Update
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="my-1">
                            <a href="/transaction" class="bg-red-400 duration-500 px-3 py-1 hover:bg-red-300 rounded">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
    
            </td>
          </tr>
        </tbody>
    </table>
    </div>
</div>
@endsection