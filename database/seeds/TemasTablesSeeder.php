<?php

use Illuminate\Database\Seeder;
use App\Tema;
class TemasTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tema::Class,100)->create();
    }
}
