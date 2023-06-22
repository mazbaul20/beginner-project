<?php

namespace Database\Factories;

use App\Models\languages;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\languages>
 */
class LanguagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = languages::class;
    public function definition(): array
    {
        return [
            'name'=>fake()->streetName(),
        ];
    }
}
