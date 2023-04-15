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

    <div class="flex-1 my-10">

        <div class="flex items-center justify-center">

            <table class="table-fixed w-11/12 border-collapse border">
                <thead class="text-center">
                  <tr class="border">
                    <th>Station 1</th>
                    <th>Station 2</th>
                    <th>Station 3</th>
                    <th>Station 4</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($schedules_right as $schedule_right)

                    <tr class="border">
                        <td>
                          @if ($schedule_right->origin_station_id == 1)
                            {{ $schedule_right->departure_time }}
                          @endif
                        </td>
                        <td>
                          @if ($schedule_right->origin_station_id == 2)
                            {{ $schedule_right->departure_time }}
                          @endif
                        </td>
                        <td>
                          @if ($schedule_right->origin_station_id == 3)
                            {{ $schedule_right->departure_time }}
                          @endif
                        </td>
                        <td>
                          @if ($schedule_right->origin_station_id == 4)
                            {{ $schedule_right->departure_time }}
                          @endif
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
              </table>
        </div>

    </div>

    
</div>

@endsection