<?php

use Illuminate\Database\Seeder;
use App\Grupo;
class GruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Grupo::Class, 10)->create();
    }
}
