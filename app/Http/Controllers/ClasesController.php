<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clase;
use App\Grupo;
use App\Profesor;
use Illuminate\Support\Facades\DB;
class ClasesController extends Controller
{
    public function listarClases()
    {
        /*
            Coge todas las clases para mostrarlos en una tabla según se carga la pagina.
            Se cogen los datos de las clases repartidos en distintas tablas
            También se mandan los grupos y las clases que existen a la vista para crear los select de 
            los formularios que serviran npara filtrar el contenido de una tabla o para
            crear un nuevo registro
        */
    	$clases=DB::table('clases')
    			->join('grupos','clases.id_grupo','=','grupos.id_grupo')
    			->join('profesores', 'clases.id_profesor','=','profesores.id')
    			->join('users','profesores.id_user','=','users.id')
    			->select('clases.id','clases.nombre_clase','grupos.nombre_grupo','grupos.id_grupo','users.name','users.apellidos','profesores.id_user')
    			->get();
        $grupos=Grupo::all();
        $profesores=DB::table('profesores')
                    ->join('users','profesores.id_user','=','users.id')
                    ->select('users.name','users.apellidos','users.email','users.telephone','profesores.id','profesores.titulo')
                    ->get();
  	return view('clases.mostrar-clases',['clases'=>$clases,
                                         'grupos'=>$grupos,
                                         'profesores'=>$profesores]);
    }

    public function aniadirClase(Request $request)
    {
        /*
            Si se llega a este metodo con una llamada Ajax se busca si existe un registro
            con los mismos datos, si existe, no se hace nada y se avisa. Si no existe se 
            crea un nuevo registro con esos datos y se avisa
        */
        $resultado="El registro no pudo guardarse";
        $existe="";    
        if($request->ajax())
        {
            $existe=Clase::where([ ['nombre_clase','=',$request->input('aniadirClase')], ['id_profesor','=',$request->input('aniadirProfesor')], ['id_grupo','=',$request->input('aniadirGrupo')] ])->get();
            if(count($existe)==0)
            {
                $clase=new Clase();
                $clase->nombre_clase=$request->input('aniadirClase');
                $clase->id_grupo=$request->input('aniadirGrupo');
                $clase->id_profesor=$request->input('aniadirProfesor');
                $clase->save();
                $resultado='Registro insertado conrrectamente';
            }
            else
            {
                $resultado='El registro ya existia';
            }
        }
      return $resultado;
    }

    public function borrarClase($id)
    {
         /*
          Borra el registro a partir del id que recibe y se avisa del resultado
        */
        $resultado="No se pudo borrar el registro";
        $clase=Clase::find($id);
        $borrado=$clase->delete();
        if($borrado>0)
        {
            $resultado="Registro borrado con exito";
        }

        return $resultado;
    }

    public function actualizarClase(Request $request, $id)
    {
        /*
            Se busca un registro por su id para actualizarlo en función de los
            datos recibidos por medio del formulario.
        */
        $resultado="No se pudo actualizar el registro";
        $clase=Clase::find($id);
        $clase->nombre_clase=$request->input('actualizarClase');
        if($request->input('actualizarGrupo')>0)
        {
            $clase->id_grupo=$request->input('actualizarGrupo');
        }
        
        if($request->input('actualizarProfesor')>0)
        {
            $clase->id_profesor=$request->input('actualizarProfesor');
        }
        
        $total=$clase->save();
        if($total>0)
        {
             $resultado='Registro insertado conrrectamente';
        }
       return $resultado;
    }
}



