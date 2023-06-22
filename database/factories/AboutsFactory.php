<?php

namespace Database\Factories;

use App\Models\abouts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\abouts>
 */
class AboutsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = abouts::class;
    public function definition(): array
    {
        return [
            'title' =>fake()->title(),
            'details'=>fake()->text(200),
        ];
    }
}
