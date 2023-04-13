<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $trainIds_right = [1, 2, 3]; 
        $trainIds_left = [4, 5, 6]; 
        $originStationIds = [1, 2, 3, 4];

        $schedules_right = Schedule::whereIn('train_id', $trainIds_right)
                            ->whereIn('origin_station_id', $originStationIds)
                            ->get();

       
        $schedule_ordered_lr = Schedule::whereBetween('train_id', [1,3])
        ->whereColumn('destination_station_id' , '>', 'origin_station_id')->orderBy('origin_station_id', 'asc')->orderBy('departure_time', 'asc')->get();
        
        $schedule_ordered_rl = Schedule::whereBetween('train_id', [1,3])
        ->whereColumn('destination_station_id' , '<', 'origin_station_id')->orderBy('origin_station_id', 'asc')->orderBy('departure_time', 'asc')->get();

        
        

        return view('/schedule/index',[
            "title" => "Schedules",
            'schedules_right' => $schedules_right,
            'schedules_ordered_lr' => $schedule_ordered_lr,
            'schedules_ordered_rl' => $schedule_ordered_rl,
            
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
