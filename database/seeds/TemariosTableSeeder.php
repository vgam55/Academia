<?php

use Illuminate\Database\Seeder;
use App\Temario;
class TemariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Temario::Class,10)->create();
    }
}
