<?php

namespace Database\Factories;

use App\Models\Educations;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Educations>
 */
class EducationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Educations::class;
    public function definition(): array
    {
        return [
            'duration' =>rand(1,4),
            'institutionName' =>fake()->word,
            'field' =>fake()->text(200),
            'details' =>fake()->paragraph(),
        ];
    }
}
