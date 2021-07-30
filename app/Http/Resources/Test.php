<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class Test extends JsonResource
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
            'test_name' => $this->name,
            'address' => $this->address,
            'phone' => $this->phone,
            'created' => Carbon::parse($this->created_at)->format('Y-m-d'),
        ];
    }
}
