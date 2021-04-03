<?php

namespace App\Models;

use App\Models\Timesheet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function timesheet()
    {
        return $this->hasMany(Timesheet::class);
    }
}
