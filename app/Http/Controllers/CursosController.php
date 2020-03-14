<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
class CursosController extends Controller
{
    public function listarCursos()
    {
    	$cursos=Curso::all();
    	return view('cursos.mostrar-cursos',['cursos'=>$cursos]);
    }
}
