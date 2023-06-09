<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $lang = session('lang', 'en');
        App::setlocale(session('lang'));
        $end_station = $request['end_station_id'];

        if($end_station == 1){
            $schedules = Schedule::where('end_station_id', 1)
                ->orderBy('departure_time')
                ->get();
            $stations = $schedules
            ->sortBy('origin_station_id')
            ->pluck('origin_station_id')
            ->unique();
        }
        else{
            $schedules = Schedule::where('end_station_id', 4)
                ->orderBy('departure_time')
                ->get();
            $stations = $schedules
            ->sortBy('origin_station_id')
            ->pluck('origin_station_id')
            ->unique();
        }
        return view('/schedule/index',[
            "title" => "Schedules",
            "schedules" => $schedules,
            "end_station" => $end_station,
            "stations" => $stations
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
