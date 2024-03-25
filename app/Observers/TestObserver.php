<?php

namespace App\Observers;
use App\Models\Test;
use Illuminate\Support\Facades\Cache;

class TestObserver {
	/**
	 * Handle the Test "created" event.
	 */
	public function created(Test $test): void {
		Cache::forget('tests');
	}

	/**
	 * Handle the Test "updated" event.
	 */
	public function updated(Test $test): void {
		Cache::forget('tests');
	}

	/**
	 * Handle the Test "deleted" event.
	 */
	public function deleted(Test $test): void {
		Cache::forget('tests');
	}

	/**
	 * Handle the Test "restored" event.
	 */
	public function restored(Test $test): void {
		//
	}

	/**
	 * Handle the Test "force deleted" event.
	 */
	public function forceDeleted(Test $test): void {
		//
	}
}
