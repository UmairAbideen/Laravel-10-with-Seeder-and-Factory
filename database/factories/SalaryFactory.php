<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salary>
 */
class SalaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            //$this->faker is faker instance and name,jobTitile are the faker methods
            'name' => $this->faker->name,
            'designation' => $this->faker->jobTitle,
            'salary' => $this->faker->numberBetween(30000, 150000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
