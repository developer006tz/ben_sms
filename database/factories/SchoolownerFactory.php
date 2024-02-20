<?php

namespace Database\Factories;

use App\Models\Schoolowner;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolownerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schoolowner::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'schoolname' => $this->faker->text(255),
            'systemowner_id' => \App\Models\Systemowner::factory(),
        ];
    }
}
