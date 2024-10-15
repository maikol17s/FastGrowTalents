<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'telephone' => $this->faker->unique()->numberBetween(3100000000, 3199999999),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), 
            'document_type' => $this->faker->randomElement(['CC', 'TI', 'PA', 'CE']),
            'document_number' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'profile_photo_path' => null, 
            'direction' => $this->faker->address,
            'references' => $this->faker->randomElement(['MALE', 'FEMALE', 'OTHER', 'NOT SPECIFIED']),
            'role_id' => $this->faker->randomElement([2, 3]),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
