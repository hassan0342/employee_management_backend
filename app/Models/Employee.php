<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'birth_date',
    ];

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function attendanceFaults()
    {
        return $this->hasMany(AttendanceFault::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
