<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        
            'name_test' => $this->faker->word(),
            'description_test' => $this->faker->word(),
            'date_test' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
