<?php

namespace App\Http\Controllers;

use App\Models\Timesheet;
use Illuminate\Http\Request;
use App\Http\Resources\TimesheetResource;

class TimesheetController extends Controller
{
    public function index()
    {
        //$timesheets = Timesheet::with(['job'])->where('user_id', auth()->id())->get();
        //return $timesheets;
        return TimesheetResource::collection(Timesheet::all());
        //return Timesheet::with('job')->where('user_id', auth()->id())->get();
    }
}
