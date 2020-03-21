<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Hora;
use Illuminate\Support\Facades\DB;
class HorariosController extends Controller
{
    public function listarHorarios()
    {
    	$horarios=Horario::all();
        $horas=Hora::all();
    	/*$horarios=DB::table('horarios')
    		    ->join('horas','hora1','=','horas.id')
    			->select('horarios.id','horarios.nombre_horario','horas.hora_ini','horas.hora_fin','horas.dia')
    			->get();*/
    	//echo $horarios;
    	return view('horarios.mostrar-horarios',['horarios'=>$horarios,
                                                 'horas'=>$horas]);
    }
}
