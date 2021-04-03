<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'job_ref' => $this->faker->randomNumber(2) . $this->faker->word(),
            'job_description' => $this->faker->paragraph(3),
            'address' => $this->faker->streetAddress,
            'suburb' => $this->faker->state,
            'city' => $this->faker->city,
        ];
    }
}
