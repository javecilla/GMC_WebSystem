<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Exceptions\Api\Auth\AuthException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Resources\Api\UserResource;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

class UserController extends Controller {
	public function __construct(protected UserService $service) {}

	public function login(LoginRequest $request): JsonResponse {
		try {
			$user = $this->service->login($request->validated());

			return Response::json(['message' => 'Login Successfully'])->withCookie($user);
		} catch (AuthException $e) {
			return Response::json(['message' => $e->getMessage()], $e->getCode());
		} catch (\Exception $e) {
			return Response::json(['message' => 'An unexpected error occurred. Code [Login]']);
		}
	}

	public function index(): UserResource {
		$user = $this->service->user();
		return new UserResource($user);
	}

	public function token() {
		Auth::user();
	}

	public function check(String $userId) {
		$user = $this->service->isLogin($userId);
		return Response::json(['message' => $user]);
	}

	public function logout(): JsonResponse {
		$user = $this->service->logout();
		return Response::json(['message' => 'Logout Successfully'])->withCookie($user);
	}
}
