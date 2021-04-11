<?php

use App\Models\Job;
use App\Models\Timesheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\Auth\TokenController;

Route::middleware('auth:sanctum')->get('/auth/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/token', [TokenController::class, 'store']);
Route::delete('/auth/token', [TokenController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/jobs', function () {
    return Job::all();
});

// Route::middleware('auth:sanctum')->get('/timesheets', function () {
//     return Timesheet::all();
// });

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/timesheets', [TimesheetController::class, 'index']);
});

Route::get('/job/{id}', function ($id) {
    return Job::find($id);
});