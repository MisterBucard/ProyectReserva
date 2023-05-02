<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HuespedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'correo_electronico' => $this->faker->email(),
            'telefono' => $this->faker->phoneNumber(),
        ];
    }
}
