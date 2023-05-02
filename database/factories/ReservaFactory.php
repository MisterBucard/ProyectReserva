<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Fecha_Entrada' => $this->faker->dateTimeBetween('-1 day','+1 months' ),
            'Fecha_Salida'=> $this->faker->dateTimeBetween('+1 days','+2 months '),
            'Numero_de_Huespedes'=>$this->faker->numerify('##'),
            'Habitacion_id'=>$this->faker->numberBetween(1,1000),
            'Huesped_id'=>$this->faker->numberBetween(1,1000)
        ];
    }
}
