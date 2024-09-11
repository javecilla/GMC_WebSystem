<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use App\Exceptions\Api\Auth\CreateCalendarException;
use App\Exceptions\Api\Auth\ConflictCalendarException;
use App\Exceptions\Api\Auth\DeleteCalendarException;
use App\Exceptions\Api\Auth\UpdateCalendarException;
use App\Exceptions\Api\Auth\ReachMaximumException;
use App\Enums\CalendarStatus;
use App\Models\Calendar;
use App\Helpers\Decoder;

class CalendarService {
	/*
	 	Validate if the requested date range overlaps with any existing events.
	 	The validation will check for overlapping events regardless of who created them.
	*/
	protected function hasOverlappingEvents($schoolYear, $startDate, $endDate, $excludedId = null) {
   	return Calendar::where('school_year', $schoolYear)
      ->where(function ($query) use ($startDate, $endDate) {
        $query->whereBetween('start_date', [$startDate, $endDate])
             	->orWhereBetween('end_date', [$startDate, $endDate])
             	->orWhere(function ($query) use ($startDate, $endDate) {
                $query->where('start_date', '<=', $startDate)
                      ->where('end_date', '>=', $endDate);
                });
        })
      	->when($excludedId, function($query) use ($excludedId) {
      		$query->where('id', '!=', $excludedId);
      	})
        ->exists();
   }

	#Create new calendar
	public function create(array $data) {
		$user = Auth::user();

    if($this->hasOverlappingEvents($data['schoolYear'], $data['startDate'], $data['endDate']))
      throw new ConflictCalendarException('An error occurred! Date range conflicts with an existing event.', Response::HTTP_CONFLICT);

		return DB::transaction(function () use ($data, $user) {
			$created = Calendar::create([
				'user_id' => $user->id,
				'event_name' => $data['event'],
				'start_date' => $data['startDate'],
				'end_date' => $data['endDate'],
				'school_year' => $data['schoolYear'],
				'pin' => CalendarStatus::NOT_PIN,
				'updated_at' => null,
			]);

			if(!$created)
				throw new CreateCalendarException('An error occured! Failed to create calendar.', Response::HTTP_UNPROCESSABLE_ENTITY);

			return;
		});
	}

	#Get calendar by school year
	public function getBySchoolYear(string $schoolYear) {
		return Cache::remember('Calendar:' . $schoolYear, 60 * 60 * 24, function() use ($schoolYear) {
			return Calendar::where('school_year', $schoolYear)->get();
		});
	}

	/*
	 	Check if the pin event schedule is on the Maximum pin then
	 	The validation will check for pin events calendar in the database
	*/
	protected function hasPinEventScheduleReachMaximum(int $max, string $schoolYear) {
		return DB::transaction(function () use ($max, $schoolYear) {
			$calendar = Calendar::where('school_year', $schoolYear)
				->where('pin', CalendarStatus::PIN)->count();
			return $calendar >= $max;
		});
	}

	#Update calendar status by id
	public function updateByStatus(string $id, string $schoolYear, string $pin) {
		$calendarId = Decoder::decodeId($id);
		$calendar = Calendar::findOrFail($calendarId);
		$max = 5;

		if($this->hasPinEventScheduleReachMaximum($max, $schoolYear) && $pin === 'yes' && $calendar->pin !== 'yes')
			throw new ReachMaximumException('An error occured! You have reach the ' . $max . ' maximum to pin calendar.', Response::HTTP_TOO_MANY_REQUESTS);

		return DB::transaction(function() use ($calendar, $pin) {
			$updated = $calendar->update([
				'pin' => $pin,
				'updated_at' => now(),
			]);

			if(!$updated)
				throw new UpdateCalendarException('An error occured! Failed to update calendar status.', Response::HTTP_UNPROCESSABLE_ENTITY);

			return;
		});
	}

	#Update calendar data
	public function update(array $data) {
		$eventId = Decoder::decodeId($data['id']);
		$calendar = Calendar::findOrFail($eventId);

		if($this->hasOverlappingEvents($data['schoolYear'], $data['startDate'], $data['endDate'], $calendar->id))
      throw new ConflictCalendarException('An error occurred! Date range conflicts with an existing event.', Response::HTTP_CONFLICT);

    return DB::transaction(function () use ($calendar, $data) {
    	$updated = $calendar->update([
				'event_name' => $data['event'],
				'start_date' => $data['startDate'],
				'end_date' => $data['endDate'],
				'school_year' => $data['schoolYear'],
				'updated_at' => now(),
    	]);

    	if(!$updated)
    		throw new UpdateCalendarException('An error occured! Failed to update calendar.', Response::HTTP_UNPROCESSABLE_ENTITY);

    	return;
    });
	}

	#Delete Calendar
	public function delete(string $id) {
		$calendarId = Decoder::decodeId($id);
		$calendar = Calendar::findOrFail($calendarId);
		return DB::transaction(function() use ($calendar) {
			$deleted = $calendar->delete();

			if(!$deleted)
				throw new DeleteCalendarException('An error occured! Failed to delete calendar.', Response::HTTP_UNPROCESSABLE_ENTITY);

			return;
		});
	}
}