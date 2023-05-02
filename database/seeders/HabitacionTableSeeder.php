<?php

namespace Database\Seeders;
use App\Models\Habitacion;
use Illuminate\Database\Seeder;

class HabitacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Habitacion::factory()->count(1000)->create();
    }
}
