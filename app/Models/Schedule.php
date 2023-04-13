<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }

    public function train(){
        return $this->belongsTo(Train::class);
    }

    public function originStation(){
        return $this->belongsTo(Station::class, 'origin_station_id');
    }

    public function destinationStation(){
        return $this->belongsTo(Station::class, 'destination_station_id');
    }
}
