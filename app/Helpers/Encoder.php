<?php

namespace App\Helpers;

use Vinkla\Hashids\Facades\Hashids;

class Encoder {
	public static final function encodeId(int $id): String {
		$encodedId = Hashids::encode($id);
		return $encodedId;
	}
}