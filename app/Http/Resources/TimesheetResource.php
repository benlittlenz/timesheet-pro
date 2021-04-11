<?php

namespace App\Http\Resources;

use App\Http\Resources\JobResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TimesheetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'job' => new JobResource($this->job),
            'user_id' => $this->user_id,
            'started_at' => $this->started_at,
            'stopped_at' => $this->stopped_at,
            'total_hours' => $this->total_hours,
        ];
    }
}
