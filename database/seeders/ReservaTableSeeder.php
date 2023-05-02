<?php

namespace Database\Seeders;
use App\Models\Reserva;
use Illuminate\Database\Seeder;

class ReservaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reserva::factory()->count(1000)->create();
    }
}
