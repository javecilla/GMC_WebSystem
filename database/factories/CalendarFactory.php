<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Calendar>
 */
class CalendarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'event_name' => 'Event name testing',
            'start_date' => now(),
            'end_date' => now(),
            'school_year' => '2024-2025',
            'pin' => 'not',
            'created_at' => now(),
            'updated_at' => null,
        ];
    }
}
