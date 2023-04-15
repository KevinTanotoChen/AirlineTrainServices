<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function originSchedules(){
        return $this->hasMany(Schedule::class, 'origin_station_id');
    }

    public function destinationSchedules(){
        return $this->hasMany(Schedule::class, 'destination_station_id');
    }

    public function schedules()
    {
        return $this->belongsToMany(Schedule::class)
                    ->withPivot('total_seat');
    }
}
