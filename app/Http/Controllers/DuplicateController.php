<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuplicateController extends Controller
{
    public function findDuplicates(Request $request)
    {
        $inputArray = $request->input('array');
        
        $occurrences = [];
        $result = [];

        foreach ($inputArray as $element) {
            if (isset($occurrences[$element])) {
                // If the element is already in occurrences, add it to the result
                $result[] = $element;
            } else {
                // Otherwise, mark the element as seen in occurrences
                $occurrences[$element] = true;
            }
        }

        $output = array_unique($result);

        return response()->json(['output' => $output]);
    }

}
