<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceFault extends Model
{
    protected $fillable = [
        'employee_id',
        'fault_description',

    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
