<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;
use Carbon\Carbon;
class GruposController extends Controller
{
    public function listarGrupos()
    {
        /*
            Coge todos los grupos para mostrarlos en una tabla según se carga la pagina.
        */
    	$grupos=Grupo::all();
    	return view('grupos.mostrar-grupos', ['grupos'=>$grupos]);
    }

    public function aniadirGrupos(Request $request)
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
    		$existe=Grupo::where([['nombre_grupo','=',$request->input('aniadirNombre')], ['anio','=',$request->input('aniadirFecha')] ])->get();
    		if(count($existe)==0)
    		{
    			$grupo=new Grupo();
    			$grupo->nombre_grupo=$request->input('aniadirNombre');
    			$grupo->anio=$request->input('aniadirFecha');
    			$grupo->save();
    			$resultado="Registro guardado con exito";
    		}
    		else
    		{
    			$resultado="El registro no se guardo porque ya existe otro igual";
    		}
    	}

    	return $resultado;
    }

    public function borrarGrupo($id)
    {
         /*
          Borra el registro a partir del id que recibe y se avisa del resultado
        */
        $resultado="No se pudo borrar el grupo";
        $grupo=Grupo::find($id);
        $borrado=$grupo->delete();
        if($borrado>0)
        {
            $resultado="Registro borrado con exito";
        }
        return $resultado;
    }

    public function actualizarGrupo(Request $request, $id)
    {
         /*
            Se busca un registro por su id para actualizarlo en función de los
            datos recibidos por medio del formulario.
        */
        $resultado="No se pudo actualizar el registro";
        $grupo=Grupo::find($id);
        $grupo->nombre_grupo=$request->input('actualizarNombre');
        $grupo->anio=$request->input('actualizarFecha');
        $total=$grupo->save();
        if($total>0)
        {
            $resultado="Registro actualizado con exito";
        }
        return $resultado;
    }
}
