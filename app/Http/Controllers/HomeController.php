<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Promotion;
use App\Models\Schedule;
use App\Models\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home', [
            'title' => 'Home',
            'stations'=> Station::all(),
            'events' => Event::latest()->take(3)->get(),
            'promos' => Promotion::all()
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

    public function search(Request $request)
    {
        $origin_station = $request->input('origin_station');
        $destination_station = $request->input('destination_station');
        
        if($origin_station < $destination_station){
            $end_station = 4;
        }
        else{
            $end_station = 1;
        }

      
        if(abs($destination_station-$origin_station) == 1){
            $schedules = DB::table('schedules as s')
                ->select('s.train_id', 's.departure_time', 's.arrival_time', 's.origin_station_id', 's.destination_station_id', 't.total_seat')
                ->join('trains as t', 's.train_id', '=', 't.id')
                ->where('s.origin_station_id', '=', $origin_station)
                ->where('s.destination_station_id', '=', $destination_station)
                ->where('s.end_station_id', '=', $end_station)
                ->get();
        }

        if (abs($destination_station - $origin_station) == 2) {
            $schedules = DB::table('schedules as s1')
                ->select('s1.train_id', 's1.departure_time', 's2.arrival_time', 's1.origin_station_id', 's2.destination_station_id', 't.total_seat')
                ->join('schedules as s2', 's1.arrival_time', '=', 's2.departure_time')
                ->join('trains as t', 's1.train_id', '=', 't.id')
                ->where('s1.origin_station_id', $origin_station)
                ->where('s2.destination_station_id', $destination_station)
                ->where('s1.end_station_id', $end_station)
                ->where('s2.end_station_id', $end_station)
                ->orderBy('s1.departure_time')
                ->get();
        }
        
        if ($destination_station - $origin_station == 3) {
            $schedules = DB::table('schedules as s1')
                ->select('s1.train_id', 's1.departure_time', 's3.arrival_time', 's1.origin_station_id', 's3.destination_station_id', 't.total_seat')
                ->join('schedules as s2', 's1.arrival_time', '=', 's2.departure_time')
                ->join('schedules as s3', 's2.arrival_time', '=', 's3.departure_time')
                ->join('trains as t', 's1.train_id', '=', 't.id')
                ->where('s1.origin_station_id', $origin_station)
                ->where('s2.origin_station_id', $origin_station+1)
                ->where('s3.origin_station_id', $origin_station+2)
                ->where('s1.end_station_id', $end_station)
                ->where('s2.end_station_id', $end_station)
                ->where('s3.end_station_id', $end_station)
                ->orderBy('s1.departure_time')
                ->get();
        }

        if ($destination_station - $origin_station == -3) {
            $schedules = DB::table('schedules as s1')
                ->select('s1.train_id', 's1.departure_time', 's3.arrival_time', 's1.origin_station_id', 's3.destination_station_id', 't.total_seat')
                ->join('schedules as s2', 's1.arrival_time', '=', 's2.departure_time')
                ->join('schedules as s3', 's2.arrival_time', '=', 's3.departure_time')
                ->join('trains as t', 's1.train_id', '=', 't.id')
                ->where('s1.origin_station_id', $origin_station)
                ->where('s2.origin_station_id', $origin_station - 1)
                ->where('s3.origin_station_id', $origin_station - 2)
                ->where('s1.end_station_id', $end_station)
                ->where('s2.end_station_id', $end_station)
                ->where('s3.end_station_id', $end_station)
                ->orderBy('s1.departure_time')
                ->get();
        }

        return view('/srp/index', compact('schedules'));
        
    }

}

