<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hora;
class HorasController extends Controller
{
    public function listarHoras()
    {
    	$horas=Hora::all();
    	return view('horas.mostrar-horas',['horas'=>$horas]);
    }

    public function aniadirHoras(Request $request)
    {
    	$resultado="No se pudo guardar el registro";
    	$existe="";
    	
    if($request->ajax())
    	{
    		$existe=Hora::where([ ['hora_ini','=',$request->input('aniadirHoraIni')], ['dia','=',$request->input('aniadirDia')], ['hora_fin','=', $request->input('aniadirHoraFin')] ])->get();
	    	if(count($existe)==0)
	    	{
	    		$hora=new Hora();
	    		$hora->dia=$request->input('aniadirDia');
	    		$hora->hora_ini=$request->input('aniadirHoraIni');
	    		$hora->hora_fin=$request->input('aniadirHoraFin');
	    		$hora->save();
	    		$resultado="Registro guardado con exito";
	    	}
	    	else
	    	{
	    		$resultado="El registro no se guardo. Ya existe uno igual";
	    	}
   		}
    	return $resultado;
    }

    public function borrarHora($id)
    {
        $resultado="No se pudo borrar el registro";
        $hora=Hora::find($id);
        $borrado=$hora->delete();
        if($borrado>0)
        {
            $resultado="Registro borrado con exito";
        }
        return $resultado;
    }
}
