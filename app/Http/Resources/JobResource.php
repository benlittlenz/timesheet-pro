<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource
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
            'job_ref' => $this->job_ref,
            'job_description' => $this->job_description,
            'address' => $this->address,
            'suburb' => $this->suburb,
            'city' => $this->city,
            'active' => $this->active,
            'status' => $this->status,
        ];
    }
}
