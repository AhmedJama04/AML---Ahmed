<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
'name' => $this->faker->name,  // Generates a random name
            'email' => $this->faker->unique()->safeEmail,  // Generates a unique email
            'password' => bcrypt('password'),  // Default password, you can hash a password like this
            'dob' => $this->faker->date(),  // Generates a random date of birth
            'usertype' => $this->faker->randomElement(['user', 'admin']),  // Randomly assigns 'user' or 'admin' as usertype
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}