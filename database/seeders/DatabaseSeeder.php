<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Train::factory(6)->create();
        \App\Models\Transaction::factory(5)->create();
        \App\Models\Station::factory(4)->create();
        \App\Models\Event::factory(6)->create();
        \App\Models\Promotion::factory(6)->create();
        \App\Models\Ticket::factory(30)->create();
        $this->call(SchedulesSeeder::class);
    }
}
