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

    public function aniadirHorario (Request $request)
    {
        $resultado="No se pudo guardar el registro";
        $existe="";
        if($request->ajax())
        {
            $existe=Horario::where([ ['nombre_horario','=',$request->input('aniadirNombreHorario')], ['hora1','=', $request->input('aniadirHora1')], ['hora2','=',$request->input('aniadirHora2')], ['hora3','=',$request->input('aniadirHora3')], ['hora4','=',$request->input('aniadirHora4')], ['hora5','=',$request->input('aniadirHora5')] ])->get();
            if(count($existe)==0)
            {
                $horarios=new Horario();
                $horarios->nombre_horario=$request->input('aniadirNombreHorario');
                $horarios->hora1=$request->input('aniadirHora1');
                $horarios->hora2=$request->input('aniadirHora2');
                $horarios->hora3=$request->input('aniadirHora3');
                $horarios->hora4=$request->input('aniadirHora4');
                $horarios->hora5=$request->input('aniadirHora5');
                $horarios->save();
                $resultado="Registro guardado con exito";
            }
            else
            {
                $resultado="El registro no se guardo por que habia otro igual";
            }
        }
        return $resultado;
    }

    public function borrarHorario($id)
    {
        $resultado="No se pudo borrar el registro";
        $horario=Horario::find($id);
        $borrado=$horario->delete();
        if($borrado>0)
        {
            $resultado="Registro borrado con exito";
        }

        return $resultado;
    }
    
    public function actualizarHorario(Request $request, $id)
    {
        $resultado="No se pudo actualizar el registro";
        $horario=Horario::find($id);
        $horario->nombre_horario=$request->input('actualizarNombreHorario');
        if($request->input('actualizarHora1')>0)
        {
            $horario->hora1=$request->input('actualizarHora1');
        }

        if($request->input('actualizarHora2')>0)
        {
            $horario->hora2=$request->input('actualizarHora2');
        }

        if($request->input('actualizarHora3')>0)
        {
            $horario->hora3=$request->input('actualizarHora3');
        }

        if($request->input('actualizarHora4')>0)
        {
            $horario->hora4=$request->input('actualizarHora4');
        }

        if($request->input('actualizarHora5')>0)
        {
            $horario->hora5=$request->input('actualizarHora5');
        }

        $actualizado=$horario->save();
        if($actualizado>0)
        {
            $resultado="Registro actualizado con exito";
        }

        return $resultado;
    }
}
