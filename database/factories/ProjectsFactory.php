<?php

namespace Database\Factories;

use App\Models\projects;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = projects::class;
    public function definition(): array
    {
        return [
            'title'=>fake()->title(),
            'previewLink'=>fake()->url(),
            'thumbnailLink'=>fake()->imageUrl(),
            'details'=>fake()->paragraph(),
        ];
    }
}
