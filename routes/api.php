<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DuplicateController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('attendance/upload', [AttendanceController::class, 'upload']);
Route::get('attendance/employee/{employeeId}', [AttendanceController::class, 'getEmployeeAttendance']);
// 
Route::post('/find-duplicates', [DuplicateController::class, 'findDuplicates']);

