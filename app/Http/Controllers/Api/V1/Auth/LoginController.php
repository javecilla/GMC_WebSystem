<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class LoginController extends Controller {
	public function index(Request $request): JsonResponse {
		return Response::json($request->all());
	}
}
