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
                        <h1 class="text-2xl font-bold">Schedule</h1>
                    </div>
                    <div class="flex-1">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa exercitationem illum minus cupiditate.</p>
                    </div>

                </div>
                
            </div>
        </div>

    </div>
    <div class="mt-5 ps-14">
      <form action="/schedule" method="GET">
        @csrf
        <label class="block uppercase tracking-wide font-bold mb-2" for="end_station_id">
          End Station
        </label>
        <div class="inline-block relative w-64">
          <select id="end_station_id" name="end_station_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option value="4" {{ $end_station == '4' ? 'selected' : '' }}>Station 4</option>
            <option value="1" {{ $end_station == '1' ? 'selected' : '' }}>Station 1</option>
            {{-- <option value="1">Station 1</option>
            <option value="4">Station 4</option> --}}
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
          </div>
        </div>
        <button class="bg-red-400 duration-500 px-4 py-1 w-32 hover:bg-red-300 rounded text-lg">Search</button>
      </form>

    </div>
    <div class="flex-1 my-10">
        <div class="flex items-center justify-center">
            <table class="table-fixed w-11/12 border-collapse border">
                <thead class="text-center">
                  <tr class="border">
                    @foreach ($stations as $station)
                        <th>Station {{ $station }}</th>

                        {{-- <th>Station 4</th> --}}
                    @endforeach
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr class="border">
                    @foreach ($stations as $station) 

                    <td>
                      @foreach ($schedules as $schedule)

                        @if ($schedule->origin_station_id == $station)
                            <li class="list-none">{{ $schedule->departure_time }}</li>
                        @endif

                      @endforeach
                    </td>

                    @endforeach                      
                </tbody>
              </table>
        </div>

    </div>

    
</div>

@endsection