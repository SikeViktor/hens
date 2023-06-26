<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HensFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'breed' => fake()->word(),
            'birth' => fake()->year(),
            'description' => fake()->sentence(),
            'sex' => fake()->word(),
            'alive' => fake()->boolean(),
            'tags' =>  fake()->word() . ',' . fake()->word() . ',' .  fake()->word(), 
            'logo' => null     
        ];
    }
}
