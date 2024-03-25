<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array {
		return [
			'id' => 1,
			'name' => 'Jerome Avecilla',
			'year_level' => '1st Year',
			'course' => 'BSIT',
			'message' => 'Learning the Vue JS with Laravel',
		];
	}
}
