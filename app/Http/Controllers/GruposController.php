<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;
use Carbon\Carbon;
class GruposController extends Controller
{
    public function listarGrupos()
    {
    	$grupos=Grupo::all();
    	return view('grupos.mostrar-grupos', ['grupos'=>$grupos]);
    }

    public function aniadirGrupos(Request $request)
    {
    	$resultado="No se pudo guardar el registro";
    	$existe="";
    	if($request->ajax())
    	{
    		$fecha=Carbon::parse($request->input('aniadirFecha'));
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
}
