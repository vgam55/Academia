<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Clase;
use App\Temario;
use App\Horario;
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
    			->select('cursos.id','cursos.nombre_curso','clases.nombre_clase','temarios.nombre_temario','horarios.nombre_horario')
    			->get();
        $clases=Clase::all();
        $temarios=Temario::all();
        $horarios=Horario::all();
    	return view('cursos.mostrar-cursos',['cursos'=>$cursos,
                                             'clases'=>$clases, 
                                             'temarios'=>$temarios,
                                             'horarios'=>$temarios]);
    }
}
