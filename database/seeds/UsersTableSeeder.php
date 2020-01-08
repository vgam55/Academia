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
        $user->email="superadmin@academia.com";
        $user->telephone="123456789";
        $user->password=bcrypt("password");
        $user->save();

        $user=new User();
        $user->name="Admin1";
        $user->email="admin@academia.com";
        $user->telephone="123456789";
        $user->password=bcrypt("password");
        $user->save();

        $user=new User();
        $user->name="Admin2";
        $user->email="admin2@academia.com";
        $user->telephone="123456789";
        $user->password=bcrypt("password");
        $user->save();

        $user=new User();
        $user->name="Admin3";
        $user->email="admin3@academia.com";
        $user->telephone="123456789";
        $user->password=bcrypt("password");
        $user->save();

         $user=new User();
        $user->name="Profe1";
        $user->email="profe1@academia.com";
        $user->telephone="123456789";
        $user->password=bcrypt("password");
        $user->save();
         $user=new User();
        $user->name="Profe2";
        $user->email="profe2@academia.com";
        $user->telephone="123456789";
        $user->password=bcrypt("password");
        $user->save();
    }
}
