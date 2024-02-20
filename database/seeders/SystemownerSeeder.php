<?php

namespace Database\Seeders;

use App\Models\Systemowner;
use Illuminate\Database\Seeder;

class SystemownerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Systemowner::factory()
            ->count(5)
            ->create();
    }
}
