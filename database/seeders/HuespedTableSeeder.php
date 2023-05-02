<?php

namespace Database\Seeders;
use App\Models\Huesped;
use Illuminate\Database\Seeder;

class HuespedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Huesped::factory()->count(1000)->create();
    }
}
