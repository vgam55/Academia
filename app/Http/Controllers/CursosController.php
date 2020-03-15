<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use Illuminate\Support\Facades\DB;
class CursosController extends Controller
{
    public function listarCursos()
    {
    	//$cursos=Curso::all();
    	$cursos=DB::table('cursos')
    			->join('clases','id_clase','=','clases.id')
    			->join('temarios', 'id_temario','=','temarios.id')
    			->join('horarios','id_horario','=','horarios.id')
    			->select('cursos.id','clases.nombre_clase','temarios.nombre_temario','horarios.nombre_horario')
    			->get();
    	//echo $cursos;
    	return view('cursos.mostrar-cursos',['cursos'=>$cursos]);
    }
}
