<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = [
        'schedule_id',
        'name',
        'start_time',
        'end_time',
       
    ];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
