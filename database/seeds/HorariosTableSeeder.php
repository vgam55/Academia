<?php

use Illuminate\Database\Seeder;
use App/Horario;
class HorariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Horario::Class, 20)->create();
    }
}
