<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();
        $user->name="SuperAdmin";
        $user->apellidos="apellido";
        $user->email="superadmin@academia.com";
        $user->telephone="123456789";
        $user->password=bcrypt("password");        
        $user->save();
        $user->assignRole("SuperAdministrador");

        $user=new User();
        $user->name="Admin1";
        $user->apellidos="apellido";
        $user->email="admin@academia.com";
        $user->telephone="123456789";
        $user->password=bcrypt("password");
        $user->save();
        $user->assignRole("Administrador");

        $user=new User();
        $user->name="Admin2";
        $user->apellidos="apellido";
        $user->email="admin2@academia.com";
        $user->telephone="123456789";
        $user->password=bcrypt("password");
        $user->save();
        $user->assignRole("Administrador");

        $user=new User();
        $user->name="Admin3";
        $user->apellidos="apellido";
        $user->email="admin3@academia.com";
        $user->telephone="123456789";
        $user->password=bcrypt("password");
        $user->save();
        $user->assignRole("Administrador");

        $user=new User();
        $user->name="Profe1";
        $user->apellidos="apellido";
        $user->email="profe1@academia.com";
        $user->telephone="123456789";
        $user->password=bcrypt("password");
        $user->save();
        $user->assignRole("Profesor");
        
         $user=new User();
        $user->name="Profe2";
        $user->apellidos="apellido";
        $user->email="profe2@academia.com";
        $user->telephone="123456789";
        $user->password=bcrypt("password");
        $user->save();
        $user->assignRole("Profesor");
    }
}
