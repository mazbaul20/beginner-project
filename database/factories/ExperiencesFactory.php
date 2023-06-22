<?php

namespace Database\Factories;

use App\Models\experiences;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\experiences>
 */
class ExperiencesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = experiences::class;
    public function definition(): array
    {
        return [
            'duration' =>rand(1,4),
            'title'=>fake()->title(),
            'designation'=>fake()->word(),
            'details'=>fake()->paragraph(),
        ];
    }
}
