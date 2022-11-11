<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isFalse;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    protected $model = User::class;



    public function definition()
    {
        return [
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'isAdmin' => false,
            'isActivated' => fake()->boolean(),
            'acceptMArketing' => fake()->boolean(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => fake()->randomElement([now(), null]),
            'last_login_at' => fake()->dateTimeThisMonth(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
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
