<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SrpController extends Controller
{
    public function search(Request $request) {

        
        $date = $request->date;
        $origin_station = $request->origin_station;
        $destination_station = $request->destination_station;
        $passenger = $request->passenger;

        // $query = Schedule::query()
        // ->whereHas('originStation', fn($query) =>
        //     $query->
        // );

        // $schedule_query = Schedule::with('originStation', 'destinationStation')->where('origin_station', '=', $origin_station)->where('destination_station', '=', $destination_station)->get();
        // dd($schedule_query);

        $subquery1 = DB::table('schedules')
                ->select('id','origin_station_id', 'destination_station_id')
                ->where('origin_station_id', '=', $origin_station);

        $subquery2 = DB::table('schedules')
                        ->select('id','origin_station_id', 'destination_station_id')
                        ->where('destination_station_id', '=', $destination_station);

        $results = DB::table(DB::raw('(' . $subquery1->toSql() . ') as t1'))
                        ->joinSub($subquery2, 't2', function($join) {
                            $join->on('t1.id', '=', 't2.id');
                        })
                        ->get();
        dd($results);
        dd($origin_station,$destination_station);
        
        return view('/srp', [
            'origin_station' => $request->origin_station,
            'destination_station' => $request->destination_station,
            'date' => $request->date,
            'passenger' => $request->passenger

        ]);
    }
}
