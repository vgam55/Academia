<?php

use Illuminate\Database\Seeder;
use App\Profesor;
class ProfesoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(Profesor::Class,10)->create();
    }
}
