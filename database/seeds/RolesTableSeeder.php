<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $profesor=new Profesor();
        $profesor->id_user=5;
        $profesor->titulo="Monitor FEDA";
        $profesor->save();*/

        $rol=new Rol();
        $rol->name="SuperAdministrador";
        $rol->guard_name="web";
        $rol->save();

        $rol=new Rol();
        $rol->name="Administrador";
        $rol->guard_name="web";
        $rol->save();

        $rol=new Rol();
        $rol->name="Profesor";
        $rol->guard_name="web";
        $rol->save();
;    }
}
