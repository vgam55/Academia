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
                                             'horarios'=>$horarios]);
    }

    public function aniadirCurso(Request $request) 
    {
        $resultado="No se pudo guardar el registro";
        $existe="";
        if($request->ajax())
        {
            $existe=Curso::where([ ['nombre_curso','=',$request->input('aniadirCurso')], ['id_clase','=',$request->input('aniadirClase')], ['id_horario','=',$request->input('aniadirHorario')], ['id_temario','=', $request->input('aniadirTemario')] ])->get();
            if(count($existe)==0)
            {
                $curso=new Curso();
                $curso->nombre_curso=$request->input('aniadirCurso');
                $curso->id_clase=$request->input('aniadirClase');
                $curso->id_horario=$request->input('aniadirHorario');
                $curso->id_temario=$request->input('aniadirTemario');
                $curso->save();
                $resultado="Registro guardado con exito";
            }
            else
            {
                $resultado="El registro no se guardo porque había otro igual";
            }
        }
       return $resultado; 
    }
}
