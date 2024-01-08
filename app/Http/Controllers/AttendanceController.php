<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppHumanResources\Attendance\Application\AttendanceService; // Adjust the namespace
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AttendanceImport;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    private $attendanceService;

    public function __construct(AttendanceService $attendanceService)
    {
        $this->attendanceService = $attendanceService;
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        $file = $request->file('file');

        $this->attendanceService->importAttendance($file);

        return response()->json(['message' => 'Attendance data imported successfully']);
    }

    public function getEmployeeAttendance($employeeId)
    {
        $attendanceData = $this->attendanceService->getEmployeeAttendance($employeeId);

        return response()->json($attendanceData);
    }

    private function calculateWorkingHours($startTime, $endTime)
    {
        $startDateTime = new \DateTime($startTime);
        $endDateTime = new \DateTime($endTime);
        $interval = $startDateTime->diff($endDateTime);
        $totalHours = $interval->h + ($interval->days * 24);

        return $totalHours;
    }
}
