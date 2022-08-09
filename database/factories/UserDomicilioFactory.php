<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'domicilio' => $this->faker->sentence,
            'numero_exterior' => $this->faker->randomDigit,
            'colonia' => $this->faker->text(20),
            'cp' => $this->faker->postcode,
            'ciudad' => $this->faker->city
        ];
    }
}
