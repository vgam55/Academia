<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	//Model::unguard();
          $this->call(UsersTableSeeder::class);
          $this->call(AlumnosTableSeeder::class);
          $this->call(ProfesoresTableSeeder::class);
          $this->call(TemasTablesSeeder::class);
          $this->call(TemariosTableSeeder::class);
       // Model::reguard();
    }
}
