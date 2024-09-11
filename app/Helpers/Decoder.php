<?php

namespace App\Helpers;

use Vinkla\Hashids\Facades\Hashids;

class Decoder {
	public static final function decodeId(String $id): int {
		$decodedId = Hashids::decode($id);
		return $decodedId[0];
	}
}