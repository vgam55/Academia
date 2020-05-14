<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Temario;
use App\Tema;
class TemariosController extends Controller
{
    public function listarTemarios()
    {
    	$temarios=Temario::all();
    	$temas=Tema::all();
    	return view('temarios.mostrar-temarios',['temarios'=>$temarios,
    											  'temas'=>$temas]);
    }

    public function aniadirTemario(Request $request)
    {
    	$resultado="No se pudo guardar el registro";
    	if($request->ajax())
    	{
    	$existe=Temario::where([ ["nombre_temario","=",$request->input('aniadirNombreTemario')], ['tema_1','=',$request->input('aniadirTema1')], ['tema_2','=',$request->input('aniadirTema2')], ['tema_3','=',$request->input('aniadirTema3')], ['tema_4','=',$request->input('aniadirTema4')], ['tema_5','=',$request->input('aniadirTema5')], ['tema_6','=',$request->input('aniadirTema6')],['tema_7','=',$request->input('aniadirTema7')], ['tema_8','=',$request->input('aniadirTema8')], ['tema_9','=',$request->input('aniadirTema9')], ['tema_10','=',$request->input('aniadirTema10')], ['tema_11','=',$request->input('aniadirTema11')], ['tema_12','=',$request->input('aniadirTema12')], ['tema_13','=',$request->input('aniadirTema13')], ['tema_14','=',$request->input('aniadirTema14')], ['tema_15','=',$request->input('aniadirTema15')] ])->get();
    	if(count($existe)==0)
    	{
	    	$temario=new Temario();
	    	$temario->nombre_temario=$request->input('aniadirNombreTemario');
	    	$temario->tema_1=$request->input('aniadirTema1');
	    	$temario->tema_2=$request->input('aniadirTema2');
	    	$temario->tema_3=$request->input('aniadirTema3');
	    	$temario->tema_4=$request->input('aniadirTema4');
	    	$temario->tema_5=$request->input('aniadirTema5');
	    	$temario->tema_6=$request->input('aniadirTema6');
	    	$temario->tema_7=$request->input('aniadirTema7');
	    	$temario->tema_8=$request->input('aniadirTema8');
	    	$temario->tema_9=$request->input('aniadirTema9');
	    	$temario->tema_10=$request->input('aniadirTema10');
	    	$temario->tema_11=$request->input('aniadirTema11');
	    	$temario->tema_12=$request->input('aniadirTema12');
	    	$temario->tema_13=$request->input('aniadirTema13');
	    	$temario->tema_14=$request->input('aniadirTema14');
	    	$temario->tema_15=$request->input('aniadirTema15');
	    	$temario->save();
	    	$resultado="Registro guardado con exito";
    	}
    	else
    	{
    		$resultado="Registro no guardado. Ya existia uno igual";
    	}
    }
    	return $resultado;
    }

    public function borrarTemario($id)
    {
        $resultado="El registro no pudo borrar";
        $temario=Temario::find($id);
        $borrado=$temario->delete();
        if($borrado>0)
        {
            $resultado="Registro borrado con exito";
        }

        return $resultado;
    }

    public function actualizarTemario(Request $request, $id)
    {
        $resultado="No se pudo actualizar el registro";
        $temario=Temario::find($id);
        $temario->nombre_temario=$request->input('actualizarNombreTemario');
        if($request->input('actualizarTema1')>0)
        {
            $temario->tema_1=$request->input('actualizarTema1');
        }

         if($request->input('actualizarTema2')>0)
        {
            $temario->tema_2=$request->input('actualizarTema2');
        }

         if($request->input('actualizarTema3')>0)
        {
            $temario->tema_3=$request->input('actualizarTema3');
        }

         if($request->input('actualizarTema4')>0)
        {
            $temario->tema_4=$request->input('actualizarTema4');
        }

         if($request->input('actualizarTema5')>0)
        {
            $temario->tema_5=$request->input('actualizarTema5');
        }

         if($request->input('actualizarTema6')>0)
        {
            $temario->tema_6=$request->input('actualizarTema6');
        }
         if($request->input('actualizarTema7')>0)
        {
            $temario->tema_7=$request->input('actualizarTema7');
        }

         if($request->input('actualizarTema8')>0)
        {
            $temario->tema_8=$request->input('actualizarTema8');
        }

         if($request->input('actualizarTema9')>0)
        {
            $temario->tema_9=$request->input('actualizarTema9');
        }

         if($request->input('actualizarTema10')>0)
        {
            $temario->tema_10=$request->input('actualizarTema10');
        }

         if($request->input('actualizarTema11')>0)
        {
            $temario->tema_11=$request->input('actualizarTema11');
        }

         if($request->input('actualizarTema12')>0)
        {
            $temario->tema_12=$request->input('actualizarTema12');
        }
         if($request->input('actualizarTema13')>0)
        {
            $temario->tema_13=$request->input('actualizarTema13');
        }

         if($request->input('actualizarTema14')>0)
        {
            $temario->tema_14=$request->input('actualizarTema14');
        }

         if($request->input('actualizarTema15')>0)
        {
            $temario->tema_15=$request->input('actualizarTema15');
        }

        $actualizado=$temario->save();
        if($actualizado>0)
        {
            $resultado="Registro actualizado con exito";
        }
        return $resultado;
    }
}

