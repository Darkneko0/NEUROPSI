<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_therapist' => $this->faker->name(),
            'app_therapist' => $this->faker->lastName(),
            'apm_therapist' => $this->faker->lastName(),
            'specialty' => $this->faker->words(),
            'user_name' => $this->faker->userName(),
            'phone' => $this->faker->buildingNumber(),
            'password' => $this->faker->password(),
            'professional_license' => $this->faker->buildingNumber(),
        ];
    }
}
