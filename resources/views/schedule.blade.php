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

            <table class="table-fixed w-11/12 border-collapse border border">
                <thead class="text-center">
                  <tr class="border">
                    <th>Bandara Soekarno Hatta</th>
                    <th>Batu Ceper</th>
                    <th>Duri</th>
                    <th>Sudirman</th>
                    <th>Manggarai</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr class="border">
                    <td>06:19</td>
                    <td>06:19</td>
                    <td>06:19</td>
                    <td>06:19</td>
                    <td>06:19</td>
                  </tr>
                  <tr class="border">
                    <td>07:30</td>
                    <td>07:30</td>
                    <td>07:30</td>
                    <td>07:30</td>
                    <td>07:30</td>
                  </tr>
                  <tr class="border">
                    <td>08:10</td>
                    <td>08:10</td>
                    <td>08:10</td>
                    <td>08:10</td>
                    <td>08:10</td>  
                  </tr>
                  <tr class="border">
                    <td>08:10</td>
                    <td>08:10</td>
                    <td>08:10</td>
                    <td>08:10</td>
                    <td>08:10</td>  
                  </tr>
                  <tr class="border">
                    <td>08:10</td>
                    <td>08:10</td>
                    <td>08:10</td>
                    <td>08:10</td>
                    <td>08:10</td>  
                  </tr>
                </tbody>
              </table>
        </div>

    </div>
</div>

@endsection