<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Calendar;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();
        Calendar::factory(1)->create();
    }
}
