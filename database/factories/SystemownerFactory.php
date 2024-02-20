<?php

namespace Database\Factories;

use App\Models\Systemowner;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SystemownerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Systemowner::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
