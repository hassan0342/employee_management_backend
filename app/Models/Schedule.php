<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'employee_id',
        'start_date',
        'end_date',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function shifts()
    {
        return $this->hasMany(Shift::class);
    }
}
