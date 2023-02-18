<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_patient' => $this->faker->name(),
            'app_patient' => $this->faker->lastName(),
            'apm_patient' => $this->faker->lastName(),
            'birth' => $this->faker->date($format = 'Y-m-d', $max = 'now') ,
            'gender' => $this->faker->name($gender = 'male'|'female'),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
