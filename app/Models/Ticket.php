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
        return $this->belongsTo(Transaction::class);
    }

    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }

}
