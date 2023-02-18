<?php

namespace Database\Factories;

use App\Models\Patients;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TherapistPatientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reason_for_consultation' => $this->faker->word(),
            'date_consultation' => $this->faker->date($format = 'Y-m-d', $max = 'now') ,
            'patient_id' => Patients::inRandomOrder()->first(),
            'user_id' => User::inRandomOrder()->first(),

        ];
    }
}
