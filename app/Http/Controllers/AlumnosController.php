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
}
