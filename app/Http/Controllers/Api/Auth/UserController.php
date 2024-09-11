<?php

namespace App\Http\Controllers\Api\Auth;

use App\Exceptions\Api\Auth\LoginException;
use App\Exceptions\Api\Auth\InvalidRecaptchaException;
use App\Exceptions\Api\Auth\InvalidRoleException;
use App\Exceptions\Api\Auth\InactiveStatusException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Services\RecaptchaService;
use App\Services\UserService;
use App\Helpers\Response;

class UserController extends Controller {
  public function __construct(
		protected RecaptchaService $recaptchaService,
		protected UserService $userService) {}

	public function login(LoginRequest $request) {
		try {
			//$this->recaptchaService->verify($request->validated('recaptcha'));
			$user = $this->userService->startSession($request->validated());

			return Response::success('Login Successfully')->withCookie($user);
		} catch (InvalidRecaptchaException $e) {
			return Response::error($e->getMessage(), $e->getCode());
		} catch (LoginException $e) {
			return Response::error($e->getMessage(), $e->getCode());
		} catch (InvalidRoleException $e) {
			return Response::error($e->getMessage(), $e->getCode());
		} catch (InactiveStatusException $e) {
			return Response::error($e->getMessage(), $e->getCode());
		} catch (\Exception $e) {
			return Response::error('An unexpected error occurred. Code [Login]');
		}
	}

	public function user() {
		return $this->userService->getUser();
	}

	public function logout() {
		$user = $this->userService->destroySession();
		return Response::success('Logout Successfully')->withCookie($user);
	}
}
