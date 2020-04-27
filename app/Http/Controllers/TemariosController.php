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
}

