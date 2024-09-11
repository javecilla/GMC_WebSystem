<?php

namespace App\Services;

use App\Exceptions\Api\Auth\LoginException;
use App\Exceptions\Api\Auth\InvalidRoleException;
use App\Exceptions\Api\Auth\InactiveStatusException;
use App\Models\User;
use App\Enums\AccountStatus;
use App\Http\Resources\Api\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Cookie\CookieJar;
use Symfony\Component\HttpFoundation\Response;

class UserService {
	public function startSession(array $credentials) {
		$login = array_filter($credentials, function($value, $key) {
			return in_array($key, ['email', 'password']);
		}, ARRAY_FILTER_USE_BOTH);

		//validate the user credentials agains database
		if (!Auth::attempt($login)) {
			Cache::forget('userRole:' . $credentials['email']);
			throw new LoginException('Login failed! Invalid email or password.', Response::HTTP_UNAUTHORIZED);
		}


		//check if the request user role match to the db role
		//if not throw an error message that user type is invalid
		$dbUserRole = $this->getRole($credentials['email']);
		if($credentials['role'] !== $dbUserRole)
			throw new InvalidRoleException('User type is invalid! Your account does not have the necessary permissions to access this resource.', Response::HTTP_FORBIDDEN);

		//check if the user account status is active or not
		$dbAccountStatus = $this->getStatus($credentials['email']);
		if($dbAccountStatus !== AccountStatus::ACTIVE) {
			Cache::forget('userStatus:' . $credentials['email']);
			throw new InactiveStatusException('Login failed! Your account is currently inactive', Response::HTTP_FORBIDDEN);
		}


		//create jwt to the authenticated user
		$user = Auth::user();
		$token = $user->createToken('loginToken')->plainTextToken;
		//set cookie
		$cookie = Cookie::make('jwt', $token, 60 * 24); // 1 day

		return $cookie;
	}

	public function getUser() {
		return Cache::remember('user:' . Auth::user()->name, 60 * 60 * 24, function () {
			return new UserResource(Auth::user());
		});
	}

	public function getRole(string $email) {
		return Cache::remember('userRole:' . $email, 60 * 60 * 24, function () use ($email) {
			$user = User::where('email', $email)->first();
			return $user->role;
		});
	}

	public function getStatus(string $email) {
		return Cache::remember('userStatus:' . $email, 60 * 60 * 24, function () use ($email) {
			$user = User::where('email', $email)->first();
			return $user->status;
		});
	}

	public function destroySession() {
		$user = Auth::user();
		$cookie = Cookie::forget('jwt');
		Cache::forget('user:' . $user->name);
		Cache::forget('userRole:' . $user->email);
		Cache::forget('userStatus:' . $user->email);

		return $cookie;
	}
}