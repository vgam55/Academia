<?php

use Illuminate\Database\Seeder;
use App\Rol;
	

use Spatie\Permission\Models\Role;
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

        /*$rol=new Rol();
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
        $rol->save();*/

       //Creamos los distintos roles que va a tener la aplicación y les damos los permisos 
       //correspondientes
       $rol= Role::create(['name' => 'SuperAdministrador']);

       //El SuperAdministrador tendra permisos para hacer de todo
       $rol->givePermissionTo('crear_administradores');
       $rol->givePermissionTo('ver_administradores');
       $rol->givePermissionTo('actualizar_administradores');
       $rol->givePermissionTo('borrar_administradores');

       $rol->givePermissionTo('crear_profesores');
	   $rol->givePermissionTo('ver_profesores');
	   $rol->givePermissionTo('actualizar_profesores');
	   $rol->givePermissionTo('borrar_profesores');

	   $rol->givePermissionTo('crear_alumnos');
	   $rol->givePermissionTo('ver_alumnos');
	   $rol->givePermissionTo('actualizar_alumnos');
	   $rol->givePermissionTo('borrar_alumnos');

	   $rol->givePermissionTo('crear_horas');
	   $rol->givePermissionTo('ver_horas');
	   $rol->givePermissionTo('actualizar_horas');
	   $rol->givePermissionTo('borrar_horas');

	   $rol->givePermissionTo('crear_temas');
	   $rol->givePermissionTo('ver_temas');
	   $rol->givePermissionTo('actualizar_temas');
	   $rol->givePermissionTo('borrar_temas');

	   $rol->givePermissionTo('crear_horarios');
	   $rol->givePermissionTo('ver_horarios');
	   $rol->givePermissionTo('actualizar_horarios');
	   $rol->givePermissionTo('borrar_horarios');

	   $rol->givePermissionTo('crear_temarios');
	   $rol->givePermissionTo('ver_temarios');
	   $rol->givePermissionTo('actualizar_temarios');
	   $rol->givePermissionTo('borrar_temarios');

	   $rol->givePermissionTo('crear_grupos');
	   $rol->givePermissionTo('ver_grupos');
	   $rol->givePermissionTo('actualizar_grupos');
	   $rol->givePermissionTo('borrar_grupos');

	   $rol->givePermissionTo('crear_clases');
	   $rol->givePermissionTo('ver_clases');
	   $rol->givePermissionTo('actualizar_clases');
	   $rol->givePermissionTo('borrar_clases');

	   $rol->givePermissionTo('crear_cursos');
	   $rol->givePermissionTo('ver_cursos');
	   $rol->givePermissionTo('actualizar_cursos');
	   $rol->givePermissionTo('borrar_cursos');

       $rol= Role::create(['name' => 'Administrador']);
       //El Administrador podra hacer todo menos crear administradores
	   $rol->givePermissionTo('crear_profesores');
	   $rol->givePermissionTo('ver_profesores');
	   $rol->givePermissionTo('actualizar_profesores');
	   $rol->givePermissionTo('borrar_profesores');

	   $rol->givePermissionTo('crear_alumnos');
	   $rol->givePermissionTo('ver_alumnos');
	   $rol->givePermissionTo('actualizar_alumnos');
	   $rol->givePermissionTo('borrar_alumnos');

	   $rol->givePermissionTo('crear_alumnos');
	   $rol->givePermissionTo('ver_alumnos');
	   $rol->givePermissionTo('actualizar_alumnos');
	   $rol->givePermissionTo('borrar_alumnos');

	   $rol->givePermissionTo('crear_horas');
	   $rol->givePermissionTo('ver_horas');
	   $rol->givePermissionTo('actualizar_horas');
	   $rol->givePermissionTo('borrar_horas');

	   $rol->givePermissionTo('crear_temas');
	   $rol->givePermissionTo('ver_temas');
	   $rol->givePermissionTo('actualizar_temas');
	   $rol->givePermissionTo('borrar_temas');

 	   $rol->givePermissionTo('crear_horarios');
	   $rol->givePermissionTo('ver_horarios');
	   $rol->givePermissionTo('actualizar_horarios');
	   $rol->givePermissionTo('borrar_horarios');

	   $rol->givePermissionTo('crear_temarios');
	   $rol->givePermissionTo('ver_temarios');
	   $rol->givePermissionTo('actualizar_temarios');
	   $rol->givePermissionTo('borrar_temarios');

	   $rol->givePermissionTo('crear_grupos');
	   $rol->givePermissionTo('ver_grupos');
	   $rol->givePermissionTo('actualizar_grupos');
	   $rol->givePermissionTo('borrar_grupos');

	   $rol->givePermissionTo('crear_clases');
	   $rol->givePermissionTo('ver_clases');
	   $rol->givePermissionTo('actualizar_clases');
	   $rol->givePermissionTo('borrar_clases');

	   $rol->givePermissionTo('crear_cursos');
	   $rol->givePermissionTo('ver_cursos');
	   $rol->givePermissionTo('actualizar_cursos');
	   $rol->givePermissionTo('borrar_cursos');

       $rol= Role::create(['name' => 'Profesor']);
       /*El profesor solo podra ver los cursos en los que este como profesor, asi como los grupos que los componen, los temarios y los horarios*/
	   $rol->givePermissionTo('ver_alumnos');
	   $rol->givePermissionTo('ver_grupos');
       $rol->givePermissionTo('ver_clases');
	   $rol->givePermissionTo('ver_cursos');

   }
}
