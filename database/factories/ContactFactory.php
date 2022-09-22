<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "first_name"=>fake()->firstName(),
            "last_name"=>fake()->lastName(),
            "email"=>fake()->safeEmail(),
            "phone_number"=>fake()->phoneNumber(),
            "city_id"=>fake()->randomDigitNot(0)
        ];
    }
}
