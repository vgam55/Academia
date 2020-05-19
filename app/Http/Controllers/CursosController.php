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
    	/*
            Coge todos los cursos para mostrarlos en una tabla según se carga la pagina.
            Se cogen los datos de los cursos repartidos en distintas tablas
            También se mandan las clases, los temarios y los horariosque existen a la vista para crear los select de 
            los formularios que serviran npara filtrar el contenido de una tabla o para
            crear un nuevo registro
        */
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
         /*
            Si se llega a este metodo con una llamada Ajax se busca si existe un registro
            con los mismos datos, si existe, no se hace nada y se avisa. Si no existe se 
            crea un nuevo registro con esos datos y se avisa
        */
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

    public function borrarCurso($id)
    {
         /*
          Borra el registro a partir del id que recibe y se avisa del resultado
        */
        $resultado="No se pudo borrar el registro";
        $curso=Curso::find($id);
        $borrado=$curso->delete();
        if($borrado>0)
        {
            $resultado="Registro borrado con exito";
        }

        return $resultado;
    }

    public function actualizarCurso(Request $request, $id)
    {
        /*
            Se busca un registro por su id para actualizarlo en función de los
            datos recibidos por medio del formulario.
        */
        $resultado="El registro no se pudo actualizar";
        $curso=Curso::find($id);
        $curso->nombre_curso=$request->input('actualizarCurso');
        if($request->input('actualizarClase')>0)
        {
            $curso->id_clase=$request->input('actualizarClase');
        }

        if($request->input('actualizarTemario')>0)
        {
            $curso->id_temario=$request->input('actualizarTemario');
        }

        if($request->input('actualizarTemario'))
        {
            $curso->id_horario=$request->input('actualizarHorario');
        }
        $total=$curso->save();

        if($total>0)
        {
            $resultado="Registro actualizado con exito";
        }
        return $resultado;        
    }
}
