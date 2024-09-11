<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;
use App\Models\Calendar;

class CalendarObserver {
	/**
	 * Handle the Calendar "created" event.
	 */
	public function created(Calendar $calendar): void {
		Cache::forget('Calendar:' . $calendar->school_year);
	}

	/**
	 * Handle the Calendar "updated" event.
	 */
	public function updated(Calendar $calendar): void {
		Cache::forget('Calendar:' . $calendar->school_year);
	}

	/**
	 * Handle the Calendar "deleted" event.
	 */
	public function deleted(Calendar $calendar): void {
		Cache::forget('Calendar:' . $calendar->school_year);
	}

	/**
	 * Handle the Calendar "restored" event.
	 */
	public function restored(Calendar $calendar): void {
		//
	}

	/**
	 * Handle the Calendar "force deleted" event.
	 */
	public function forceDeleted(Calendar $calendar): void {
		//
	}
}
