<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Helpers\Encoder;

class CalendarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
      return [
       	'id' => Encoder::encodeId($this->id),
       	'user_id' => Encoder::encodeId($this->user_id),
       	'event_name' => $this->event_name,
       	'start_date' => $this->start_date,
       	'end_date' => $this->end_date,
       	'school_year' => $this->school_year,
       	'pin' => $this->pin,
       	'created_at' => $this->created_at,
       	'updated_at' => $this->updated_at,
      ];

    }
}
