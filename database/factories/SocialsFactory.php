<?php

namespace Database\Factories;

use App\Models\Socials;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Socials>
 */
class SocialsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Socials::class;
    public function definition(): array
    {
        return [
            'twitterLink' => fake()->url(),
            'githubLink' => fake()->url(),
            'linkdinLink' => fake()->url(),
        ];
    }
}
