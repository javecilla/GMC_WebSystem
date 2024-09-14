<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Vite;
use App\Models\User;
use App\Models\Calendar;
use App\Observers\UserObserver;
use App\Observers\CalendarObserver;

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
        // Setting limit api request
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip())
            ->response(function (Request $request, array $headers) {
                return response('Custom response...', 429, $headers);
            });
        });

        // Allow the data schema to create freely database table
        Schema::defaultStringLength(191);

        //Use the bootstrap pagination ui button
        Paginator::useBootstrapFive();

        //format the return data in resource collection
        JsonResource::withoutWrapping();

        Vite::useManifestFilename('build/manifest.json');

        // Model Event Observer
        User::observe(UserObserver::class);
        Calendar::observe(CalendarObserver::class);
    }
}
