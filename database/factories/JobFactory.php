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
            'job_title' => $this->faker->jobTitle,
            'department' => $this->faker->randomElement(['Engineering', 'Administration', 'Payroll']),
            'salary_from' => $this->faker->numberBetween($min = 15000, $max = 25000),
            'salary_to' => $this->faker->numberBetween($min = 30000, $max = 45000),
            'job_description' => $this->faker->sentence(30),
            'job_location' => $this->faker->city,
            'seniority_level' => $this->faker->randomElement(['Student Level', 'Entry Level', 'Mid Level', 'Senior Level', 'Director']),
            'experience' => $this->faker->randomElement(['1 Year', '2 Years', '3 Years', '4 Years', '5 Years']),
            'employment_type' => $this->faker->randomElement(['Full Time', 'Part Time', 'Remote', 'Internship', 'Contract', 'Training']),
            'published' => $this->faker->randomElement([true, false]),
            'expiry_date' => $this->faker->dateTimeBetween($startDate = 'now',
            $endDate = '30 years', $timezone = date_default_timezone_get()),
            'created_at' => $this->faker->dateTimeBetween($startDate = '-30 years',
            $endDate = 'now', $timezone = date_default_timezone_get()),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-10 years',
            $endDate = 'now', $timezone = date_default_timezone_get()),
            
        ];
    }
}
