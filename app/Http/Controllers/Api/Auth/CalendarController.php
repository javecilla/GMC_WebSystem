<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Facades\ModelNotFoundException;
use App\Exceptions\Api\Auth\CreateCalendarException;
use App\Exceptions\Api\Auth\ConflictCalendarException;
use App\Exceptions\Api\Auth\UpdateCalendarException;
use App\Exceptions\Api\Auth\ReachMaximumException;
use App\Exceptions\Api\Auth\DeleteCalendarException;
use App\Http\Requests\Api\Auth\CreateCalendarRequest;
use App\Http\Requests\Api\Auth\UpdateCalendarRequest;
use App\Helpers\Response;
use App\Http\Resources\Api\CalendarResource;
use App\Http\Controllers\Controller;
use App\Services\CalendarService;

class CalendarController extends Controller {

	public function __construct(
		protected CalendarService $calendarService
	) {
	}

  //store new calendar
  public function store(CreateCalendarRequest $request) {
  	try {
  		$this->calendarService->create($request->validated());

  		return Response::success('Calendar Created Successfully!');
  	} catch (CreateCalendarException $e) {
  		return Response::error($e->getMessage(), $e->getCode());
  	} catch (ConflictCalendarException $e) {
  		return Response::error($e->getMessage(), $e->getCode());
  	} catch (\Exception $e) {
  		\Log::info($e->getMessage());
  		return Response::error('An unexpected error occurred. Code [Calendar]');
  	}
  }

  // Get calendars by school year
  public function show(string $schoolYear) {
    $calendars = $this->calendarService->getBySchoolYear($schoolYear);

    return CalendarResource::collection($calendars);
  }

  // Update calendars status by id
  public function toggle(string $id, string $schoolYear, string $pin) {
    try {
      $this->calendarService->updateByStatus($id, $schoolYear, $pin);

      return Response::success('Calendar Status Updated Successfully!');
    } catch(ModelNotFoundException $e) {
      return Response::error($e->getMessage(), $e->getCode());
    } catch(ReachMaximumException $e) {
      return Response::error($e->getMessage(), $e->getCode());
    } catch(UpdateCalendarException $e) {
      return Response::error($e->getMessage(), $e->getCode());
    } catch (\Exception $e) {
      \Log::info($e->getMessage());
      return Response::error('An unexpected error occurred. Code [Calendar]');
    }
  }

  public function update(UpdateCalendarRequest $request) {
    try {
      $this->calendarService->update($request->validated());

      return Response::success('Calendar Updated Successfully.');
    } catch(ModelNotFoundException $e) {
      return Response::error($e->getMessage(), $e->getCode());
    } catch (ConflictCalendarException $e) {
      return Response::error($e->getMessage(), $e->getCode());
    } catch(UpdateCalendarException $e) {
      return Response::error($e->getMessage(), $e->getCode());
    } catch(\Exception $e) {
      \Log::info($e->getMessage());
      return Response::error('An unexpected error occurred. Code [Calendar]');
    }
  }

  //delete calendar
  public function destroy(string $id) {
    try {
      $this->calendarService->delete($id);
      return Response::success('Calendar Deleted Successfully');
    } catch(ModelNotFoundException $e) {
      return Response::error($e->getMessage(), $e->getCode());
    } catch (DeleteCalendarException $e) {
      return Response::error($e->getMessage(), $e->getCode());
    } catch (\Exception $e) {
      \Log::info($e->getMessage());
      return Response::error('An unexpected error occurred. Code [Calendar]');
    }
  }
}
