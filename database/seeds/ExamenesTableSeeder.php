<?php

use Illuminate\Database\Seeder;
use App\Examen;

class ExamenesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Examen::class, 1000)->create();
    }
}
