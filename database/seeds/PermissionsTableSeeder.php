<?php

use Illuminate\Database\Seeder;
use App\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permiso=new Permission();
        $permiso->name="crear_administradores";
        $permiso->guard_name="web";
 		$permiso->save();
 		       
        $permiso=new Permission();
        $permiso->name="ver_administradores";
        $permiso->guard_name="web";
		$permiso->save();
		
        $permiso=new Permission();
        $permiso->name="actualizar_administradores";
        $permiso->guard_name="web";
		$permiso->save();
		
        $permiso=new Permission();
        $permiso->name="borrar_administradores";
        $permiso->guard_name="web";
		$permiso->save();
		
        $permiso=new Permission();
        $permiso->name="crear_profesores";
        $permiso->guard_name="web";
		$permiso->save();
		
        $permiso=new Permission();
        $permiso->name="ver_profesores";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="actualizar_profesores";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="borrar_profesores";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="crear_alumnos";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="ver_alumnos";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="actualizar_alumnos";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="borrar_alumnos";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="crear_horas";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="ver_horas";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="actualizar_horas";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="borrar_horas";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="crear_temas";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="ver_temas";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="actualizar_temas";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="borrar_temas";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="crear_grupos";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="ver_grupos";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="actualizar_grupos";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="borrar_grupos";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="crear_temarios";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="ver_temarios";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="actualizar_temarios";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="borrar_temarios";
        $permiso->guard_name="web";
        $permiso->save();

        $permiso=new Permission();
        $permiso->name="crear_horarios";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="ver_horarios";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="actualizar_horarios";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="borrar_horarios";
        $permiso->guard_name="web";
	 	$permiso->save();

        $permiso=new Permission();
        $permiso->name="crear_clases";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="ver_clases";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="actualizar_clases";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="borrar_clases";
        $permiso->guard_name="web";
        $permiso->save();

        $permiso=new Permission();
        $permiso->name="crear_cursos";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="ver_cursos";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="actualizar_cursos";
        $permiso->guard_name="web";
		$permiso->save();

        $permiso=new Permission();
        $permiso->name="borrar_cursos";
        $permiso->guard_name="web";
        $permiso->save();
    }
}
