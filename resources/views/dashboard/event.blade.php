@extends('layouts.adminMain')

@section('container')
<style>
    .product-image {
        margin-bottom: 10px;
        width: 7em;
        height: 7em;
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
    <div class="w-4/5 bg-gray-100 p-4" id="content">
      <h1 class="text-3xl font-semibold mb-4">Dashboard</h1>
      <form id="create-news-event-form" action="{{ route('news-event.create') }}">
        <button type="submit" class="bg-red-400 duration-500 px-4 py-2 hover:bg-red-300 rounded" style="margin-bottom:10px;">Add New News & Event</button>
      </form>
        <table class="w-full border-collapse">
            <thead class="text-left">
                <tr>
                    <th class="border-b-2 border-gray-200 px-4 py-2">ID</th>
                    <th class="border-b-2 border-gray-200 px-4 py-2">Title</th>
                    <th class="border-b-2 border-gray-200 px-4 py-2">Content</th>
                    <th class="border-b-2 border-gray-200 px-4 py-2">Image</th>
                    <th class="border-b-2 border-gray-200 px-4 py-2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($events as $event)
                    <tr>

                        <td class="border-b border-gray-200 px-4 py-2">{{ $event->id }}</td>
                        <td class="border-b border-gray-200 px-4 py-2">{{ $event->title }}</td>
                        <td class="border-b border-gray-200 px-4 py-2">{{ $event->content }}</td>
                        <td class="border-b border-gray-200 px-4 py-2">
                            <img src="{{ asset($event->image) }}" alt="News Image" class="product-image">
                        </td>
                        <td class="border-b border-gray-200 px-4 py-2">

                            <div class="flex flex-row justify-center space-x-2">

                                <div>
                                    <div class="my-1">
                                        <form id="update-news-event-form" action="{{ route('news-event.edit', $event->id) }}">
                                            <button class="bg-red-400 duration-500 px-3 py-1 hover:bg-red-300 rounded" type="submit">Update</button>
                                        </form>
                                    </div>
                                </div>
                                <div>
                                    <div class="my-1">
                                        <form id="delete-news-event-form" action="{{ route('news-event.destroy', $event->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-red-400 duration-500 px-3 py-1 hover:bg-red-300 rounded" type="submit" onclick="return confirm('Are you sure you want to delete this news event?')">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $events->links() }}
    </div>
</div>
@endsection

<script>
    document.querySelector('#update-news-event-form').addEventListener('submit', function(event) {
        event.preventDefault();
        let form = event.target;
        let formData = new FormData(form);
        fetch(form.action, {
            method: form.method,
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            // handle response data
        })
        .catch(error => console.error(error));
    });
</script>
