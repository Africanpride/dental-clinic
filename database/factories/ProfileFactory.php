<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'telephone'=> fake()->e164PhoneNumber(),
            'profile_details'=> fake()->text(),
            'profile_image'=> fake()->imageUrl(),
            'last_login_ip'=> fake()->ipv4(),
        ];
    }
}
