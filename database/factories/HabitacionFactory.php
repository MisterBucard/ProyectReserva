<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HabitacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Num_Habitacion' => $this->faker->unique()->numberBetween(1,5000),
            'Precio' => $this->faker->randomFloat(2,0,17000),
            'Tipo'=>$this->faker->randomElement(['Individual','Doble','Suite'])
        ];
    }
}
