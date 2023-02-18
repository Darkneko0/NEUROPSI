<?php

namespace Database\Factories;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleTherapistsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'role_id' => Roles::inRandomOrder()->first(),
            'user_id' => User::inRandomOrder()->first(),
        ];
    }
}
