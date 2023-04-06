<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedules = [
            //train_id: 1
            [
                'train_id' => 1,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '06:00:00',
                'arrival_time' => '07:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '07:00:00',
                'arrival_time' => '08:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '08:00:00',
                'arrival_time' => '09:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '09:00:00',
                'arrival_time' => '10:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '10:00:00',
                'arrival_time' => '11:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '11:00:00',
                'arrival_time' => '12:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '12:00:00',
                'arrival_time' => '13:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '13:00:00',
                'arrival_time' => '14:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '14:00:00',
                'arrival_time' => '15:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '15:00:00',
                'arrival_time' => '16:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '16:00:00',
                'arrival_time' => '17:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '17:00:00',
                'arrival_time' => '18:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '18:00:00',
                'arrival_time' => '19:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '19:00:00',
                'arrival_time' => '20:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '20:00:00',
                'arrival_time' => '21:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '21:00:00',
                'arrival_time' => '22:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '22:00:00',
                'arrival_time' => '23:00:00',
            ],

            [
                'train_id' => 1,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '23:00:00',
                'arrival_time' => '00:00:00',
            ],
            
            //train_id: 2
            [
                'train_id' => 2,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '06:00:00',
                'arrival_time' => '07:00:00',
            ],
            
            [
                'train_id' => 2,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '07:00:00',
                'arrival_time' => '08:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '08:00:00',
                'arrival_time' => '09:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '09:00:00',
                'arrival_time' => '10:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '10:00:00',
                'arrival_time' => '11:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '11:00:00',
                'arrival_time' => '12:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '12:00:00',
                'arrival_time' => '13:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '13:00:00',
                'arrival_time' => '14:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '14:00:00',
                'arrival_time' => '15:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '15:00:00',
                'arrival_time' => '16:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '16:00:00',
                'arrival_time' => '17:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '17:00:00',
                'arrival_time' => '18:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '18:00:00',
                'arrival_time' => '19:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '19:00:00',
                'arrival_time' => '20:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '20:00:00',
                'arrival_time' => '21:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '21:00:00',
                'arrival_time' => '22:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '22:00:00',
                'arrival_time' => '23:00:00',
            ],

            [
                'train_id' => 2,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '23:00:00',
                'arrival_time' => '00:00:00',
            ],

            //train_id: 3
            [
                'train_id' => 3,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '06:00:00',
                'arrival_time' => '07:00:00',
            ],
            
            [
                'train_id' => 3,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '07:00:00',
                'arrival_time' => '08:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '08:00:00',
                'arrival_time' => '09:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '09:00:00',
                'arrival_time' => '10:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '10:00:00',
                'arrival_time' => '11:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '11:00:00',
                'arrival_time' => '12:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '12:00:00',
                'arrival_time' => '13:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '13:00:00',
                'arrival_time' => '14:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '14:00:00',
                'arrival_time' => '15:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '15:00:00',
                'arrival_time' => '16:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '16:00:00',
                'arrival_time' => '17:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '17:00:00',
                'arrival_time' => '18:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '18:00:00',
                'arrival_time' => '19:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '19:00:00',
                'arrival_time' => '20:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '20:00:00',
                'arrival_time' => '21:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '21:00:00',
                'arrival_time' => '22:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '22:00:00',
                'arrival_time' => '23:00:00',
            ],

            [
                'train_id' => 3,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '23:00:00',
                'arrival_time' => '00:00:00',
            ],

            //train_id: 4
            [
                'train_id' => 4,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '06:00:00',
                'arrival_time' => '07:00:00',
            ],
            
            [
                'train_id' => 4,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '07:00:00',
                'arrival_time' => '08:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '08:00:00',
                'arrival_time' => '09:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '09:00:00',
                'arrival_time' => '10:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '10:00:00',
                'arrival_time' => '11:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '11:00:00',
                'arrival_time' => '12:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '12:00:00',
                'arrival_time' => '13:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '13:00:00',
                'arrival_time' => '14:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '14:00:00',
                'arrival_time' => '15:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '15:00:00',
                'arrival_time' => '16:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '16:00:00',
                'arrival_time' => '17:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '17:00:00',
                'arrival_time' => '18:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '18:00:00',
                'arrival_time' => '19:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '19:00:00',
                'arrival_time' => '20:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '20:00:00',
                'arrival_time' => '21:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '21:00:00',
                'arrival_time' => '22:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '22:00:00',
                'arrival_time' => '23:00:00',
            ],

            [
                'train_id' => 4,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '23:00:00',
                'arrival_time' => '00:00:00',
            ],

            //train_id: 5
            [
                'train_id' => 5,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '06:00:00',
                'arrival_time' => '07:00:00',
            ],
            
            [
                'train_id' => 5,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '07:00:00',
                'arrival_time' => '08:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '08:00:00',
                'arrival_time' => '09:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '09:00:00',
                'arrival_time' => '10:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '10:00:00',
                'arrival_time' => '11:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '11:00:00',
                'arrival_time' => '12:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '12:00:00',
                'arrival_time' => '13:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '13:00:00',
                'arrival_time' => '14:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '14:00:00',
                'arrival_time' => '15:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '15:00:00',
                'arrival_time' => '16:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '16:00:00',
                'arrival_time' => '17:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '17:00:00',
                'arrival_time' => '18:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '18:00:00',
                'arrival_time' => '19:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '19:00:00',
                'arrival_time' => '20:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '20:00:00',
                'arrival_time' => '21:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '21:00:00',
                'arrival_time' => '22:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '22:00:00',
                'arrival_time' => '23:00:00',
            ],

            [
                'train_id' => 5,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '23:00:00',
                'arrival_time' => '00:00:00',
            ],

            //train_id: 6
            [
                'train_id' => 6,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '06:00:00',
                'arrival_time' => '07:00:00',
            ],
            
            [
                'train_id' => 6,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '07:00:00',
                'arrival_time' => '08:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '08:00:00',
                'arrival_time' => '09:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '09:00:00',
                'arrival_time' => '10:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '10:00:00',
                'arrival_time' => '11:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '11:00:00',
                'arrival_time' => '12:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '12:00:00',
                'arrival_time' => '13:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '13:00:00',
                'arrival_time' => '14:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '14:00:00',
                'arrival_time' => '15:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '15:00:00',
                'arrival_time' => '16:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '16:00:00',
                'arrival_time' => '17:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '17:00:00',
                'arrival_time' => '18:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 4,
                'destination_station_id' => 3,
                'departure_time' => '18:00:00',
                'arrival_time' => '19:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 3,
                'destination_station_id' => 2,
                'departure_time' => '19:00:00',
                'arrival_time' => '20:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 2,
                'destination_station_id' => 1,
                'departure_time' => '20:00:00',
                'arrival_time' => '21:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 1,
                'destination_station_id' => 2,
                'departure_time' => '21:00:00',
                'arrival_time' => '22:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 2,
                'destination_station_id' => 3,
                'departure_time' => '22:00:00',
                'arrival_time' => '23:00:00',
            ],

            [
                'train_id' => 6,
                'origin_station_id' => 3,
                'destination_station_id' => 4,
                'departure_time' => '23:00:00',
                'arrival_time' => '00:00:00',
            ]
        ];

        foreach ($schedules as $schedule) {
            DB::table('schedules')->insert($schedule);
        }
        
    }
}
