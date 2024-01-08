<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'employee_id',
        'date',
        'is_present',
        // Add other fields as needed
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
