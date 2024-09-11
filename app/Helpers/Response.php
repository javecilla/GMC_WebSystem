<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response as LaravelResponse;

class Response {
	public static function success(
		string $message = '',
		$data = null): JsonResponse {
			return LaravelResponse::json(['success' => true, 'message' => $message, 'data' => $data]);
	}

	public static function error(
		string $message = '',
		int $statusCode = 500): JsonResponse {
			return LaravelResponse::json(['success' => true, 'message' => $message], $statusCode);
	}
}