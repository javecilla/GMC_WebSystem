<?php

namespace App\Services;

use App\Exceptions\Api\Auth\AuthException;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class UserService {

	public function login(array $credentials) {
		if (!Auth::attempt($credentials)) {
			throw new AuthException('Invalid Credentials.', Response::HTTP_UNAUTHORIZED);
		}

		$user = Auth::user();
		$user->update(['status' => true]);
		$token = $user->createToken('loginToken')->plainTextToken;
		$cookie = cookie('jwt', $token, 60 * 24); //1 day

		return $cookie;
	}

	public function user() {
		return Cache::remember('user:' . Auth::user()->name, 60 * 60 * 24, function () {
			return Auth::user();
		});
	}

	public function logout() {
		$user = Auth::user();
		$user->update(['status' => false]);
		$cookie = Cookie::forget('jwt');
		Cache::forget('user:' . $user->name);

		return $cookie;
	}
}