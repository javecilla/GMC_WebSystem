<?php

namespace App\Http\Resources\Api;

use App\Helpers\Encoder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class UserResource extends JsonResource {

	public function toArray(Request $request): array {
		return [
			'id' => Encoder::encodeId($this->id),
			'name' => $this->name,
			'email' => $this->email,
			'status' => $this->status,
			'role' => $this->role,
		];
	}
}

