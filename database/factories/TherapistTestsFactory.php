<?php

namespace Database\Factories;

use App\Models\Patients;
use App\Models\Tests;
use App\Models\TherapistPatients;
use Illuminate\Database\Eloquent\Factories\Factory;

class TherapistTestsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'therapist_id' => TherapistPatients::inRandomOrder()->first(),
            'test_id' => Tests::inRandomOrder()->first(),

        ];
    }
}
