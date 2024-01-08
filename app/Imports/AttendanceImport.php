<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use App\Models\Attendance;

class AttendanceImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Attendance::create([
                'id' => $row[0], // Assuming 'id' is the first column in your Excel file
                'first_name' => $row[1],
                'last_name' => $row[2],
                'email' => $row[3],
                'birth_date' => $row[4],
        
            ]);
        }
    }
}
