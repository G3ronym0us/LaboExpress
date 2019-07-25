<?php

use Illuminate\Database\Seeder;
use App\Persona;

class PacienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Persona::class, 1000)->create();
    }
}
