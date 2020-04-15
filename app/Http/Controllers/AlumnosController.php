<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Alumno;
class AlumnosController extends Controller
{
    public function listarAlumnos()
    {
    	$alumnos=Alumno::all();
    	$alumnos=DB::table('alumnos')
    			->join('grupos','id_grupo','=','grupos.id')
    			->select('alumnos.id','alumnos.apellidos','alumnos.nombre','alumnos.email','alumnos.telefono','alumnos.fecha_nacimiento','grupos.nombre_grupo')
    			->get();
    	return view('alumnos.mostrar-alumnos',['alumnos'=>$alumnos]);
    }

    public function aniadirAlumno(Request $request)
    {
    	$resultado="El registro no pudo guardarse";
    	$existe=""
    	if($request->ajax())
    	{
    		$existe=$Alumno::where([ ['nombre','=',$request->input('aniadirNombre')],['apellidos','=',$request->input('aniadirApellidos')],['email','=',$aniadirEmail],['telefono','=',$request->input('aniadirTelefono')]])->get();
    		if($existe="")
    		{
    			$alumno=new Alumno();
    			$alumno->nombre=$request->input('aniadirNombre');
    			$alumno->apellidos=$request->input('aniadirApellidos');
    			$resultado='Registro insertado conrrectamente';
    		}
    		else
    		{
    			$resultado="El registro ya existe";
    		}

    	}
    	return $resultado;
    }
}
