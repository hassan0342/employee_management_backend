<?php

namespace App\AppHumanResources\Attendance\Application;

use App\Models\Attendance;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AttendanceImport;

class AttendanceService
{
    public function importAttendance($file)
    {
        Excel::import(new AttendanceImport, $file);
    }

    public function getEmployeeAttendance($employeeId)
    {
        $attendance = Attendance::where('employee_id', $employeeId)->get();

        return [
            'employee_id' => $employeeId,
            'attendance' => $attendance,
        ];
    }
}
