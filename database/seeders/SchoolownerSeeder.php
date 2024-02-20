<?php

namespace Database\Seeders;

use App\Models\Schoolowner;
use Illuminate\Database\Seeder;

class SchoolownerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schoolowner::factory()
            ->count(5)
            ->create();
    }
}
