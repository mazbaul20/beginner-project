<?php

namespace Database\Factories;

use App\Models\contacts;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class contactsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = contacts::class;
    public function definition(): array
    {
        return [
            'fullName' => fake()->name(),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'message' => fake()->text('10'),
            // 'remember_token' => Str::random(5),
        ];
    }
}
