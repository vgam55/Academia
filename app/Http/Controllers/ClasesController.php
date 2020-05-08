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



