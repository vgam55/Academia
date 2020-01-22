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
          $this->call(ProfesoresTableSeeder::class);
          $this->call(GruposTableSeeder::class);
          $this->call(TemasTablesSeeder::class);
          $this->call(HorasTableSeeder::class);
          $this->call(AlumnosTableSeeder::class);
          $this->call(TemariosTableSeeder::class);
          $this->call(HorariosTableSeeder::class);
          $this->call(ClasesTableSeeder::class);
          $this->call(CursosTableSeeder::class);
          $this->call(RolesTableSeeder::class);
          $this->call(PermissionsTableSeeder::class);
       // Model::reguard();
    }
}
