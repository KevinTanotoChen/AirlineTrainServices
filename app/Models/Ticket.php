<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }

    public function originStation(){
        return $this->belongsTo(Station::class, 'origin_station_id');
    }

    public function destinationStation(){
        return $this->belongsTo(Station::class, 'destination_station_id');
    }

    public function train(){
        return $this->belongsTo(Ticket::class, 'train_id');
    }

    // public function schedule(){
    //     return $this->belongsTo(Schedule::class);
    // }

}
