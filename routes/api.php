<?php

use App\Http\Controllers\Auth\TokenController;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/auth/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/token', [TokenController::class, 'store']);
Route::delete('/auth/token', [TokenController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/jobs', function () {
    return Job::all();
});

Route::middleware('auth:sanctum')->get('/timesheets', function () {
    return Timesheet::all();
});

Route::get('/job/{id}', function ($id) {
    return Job::find($id);
});