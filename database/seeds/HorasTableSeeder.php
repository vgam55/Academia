<?php

use Illuminate\Database\Seeder;
use App\Hora;
class HorasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hora::Class,30)->create();
    }
}
