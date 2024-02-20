<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'password' => $this->faker->password(),
            'subjectname' => $this->faker->text(255),
            'schoolowner_id' => \App\Models\Schoolowner::factory(),
        ];
    }
}
