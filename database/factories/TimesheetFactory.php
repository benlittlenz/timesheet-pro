<?php

namespace Database\Factories;

use App\Models\Timesheet;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimesheetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Timesheet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $start =  $this->faker->dateTimeThisMonth();
        $finish =  $this->faker->dateTimeThisMonth();

        //$difference = round(abs(strtotime($finish) - strtotime($start)) / 3600,2);
        return [
            'job_id' => 1,
            'user_id' => 1,
            'started_at' => $start,
            'stopped_at' => $finish,
            'total_hours' => 5,
        ];
    }
}
