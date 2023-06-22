<?php

namespace Database\Factories;

use App\Models\skills;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\skills>
 */
class SkillsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = skills::class;
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
        ];
    }
}
