<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
class AlumnosController extends Controller
{
    public function listarAlumnos()
    {
    	$alumnos=Alumno::all();
    	return view('alumnos.mostrar-alumnos',['alumnos'=>$alumnos]);
    }
}
