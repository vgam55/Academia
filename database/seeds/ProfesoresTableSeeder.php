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
        
         /*
           $user=new User();
        $user->name="SuperAdmin";
        $user->email="superadmin@academia.com";
        $user->telephone="123456789";
        $user->password=bcrypt("password");
        $user->save();
         */
        $profesor=new Profesor();
        $profesor->id_user=5;
        $profesor->titulo="Monitor FEDA";
        $profesor->save();

        $profesor=new Profesor();
        $profesor->id_user=6;
        $profesor->titulo='Patalla Panoramica FIDE';
        $profesor->save();
    }
}
