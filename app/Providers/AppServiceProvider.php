<?php

namespace App\Providers;

use App\Models\Test;
use App\Observers\TestObserver;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Register any application services.
	 */
	public function register(): void {
		//
	}

	/**
	 * Bootstrap any application services.
	 */
	public function boot(): void {
		// Allow the data schema to create freely database table
		Schema::defaultStringLength(191);

		// Setting limit api request
		RateLimiter::for('api', function (Request $request) {
			return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip())
			->response(function (Request $request, array $headers) {
				return response('Custom response...', 429, $headers);
			});
		});

		//Use the bootstrap pagination ui button
		Paginator::useBootstrapFive();

		//format the return data in resource collection
		JsonResource::withoutWrapping();

		// Model Event Observer
		Test::observe(TestObserver::class);
	}
}
