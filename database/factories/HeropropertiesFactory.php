<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Heroproperties;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HeropropertiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Heroproperties::class;
    public function definition(): array
    {
        return [
            'keyLine' => fake()->text(20),
            'title' => fake()->title(),
            'short_title' => fake()->text(20),
            'img' => fake()->imageUrl(),
        ];
    }
}
