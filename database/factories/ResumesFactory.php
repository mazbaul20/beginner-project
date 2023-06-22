<?php

namespace Database\Factories;

use App\Models\resumes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\resumes>
 */
class ResumesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = resumes::class;
    public function definition(): array
    {
        return [
            'downloadLink' => fake()->url(),
        ];
    }
}
