<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Enums\AccountStatus;
use App\Enums\UserRole;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Jerome Avecilla', //fake()->name()
            'email' => 'jeromesavc@gmail.com', //fake()->unique()->safeEmail()
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'status' => AccountStatus::ACTIVE,
            'role' => UserRole::ADMIN,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => null,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}