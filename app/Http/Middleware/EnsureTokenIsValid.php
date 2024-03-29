<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid {

	public function handle(Request $request, Closure $next) {
		if (Auth::check()) {
			$user = Auth::user();
			$token = $request->cookie('jwt');

			if (!$user->hasToken($token)) {
				return response()->json(['message' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
			}
		}

		return $next($request);
	}
}
