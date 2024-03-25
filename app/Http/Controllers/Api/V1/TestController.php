<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\TestRequest;
use App\Http\Resources\Api\TestResource;
use App\Models\Test;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Response;

class TestController extends Controller {
	/**
	 * Display a listing of the resource.
	 */
	public function index() {
		return Cache::remember('tests', 60 * 60 * 24, function () {
			return TestResource::collection(Test::all());
		});
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(TestRequest $request) {
		$test = Test::create($request->validated());
		return new TestResource($test);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Test $test) {
		return new TestResource($test);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(TestRequest $request, Test $test): TestResource {
		$result = $test->update($request->validated());
		if (!$result) {
			throw new UpdateException('Failed to update', 422);
		}

		return TestResource::make($test)->additional(['type' => 'success', 'text' => 'Updated successfully.']);
		//return Response::make(['success' => true, 'text' => 'Updated successfully.']);
		//return new TestResource($test)->additional(['type' => 'success', 'text' => 'Updated successfully.']);
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Test $test) {
		$test->delete();
		return response()->noContent();
	}
}
