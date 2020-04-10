<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tema;
class TemasController extends Controller
{
   public function listarTemas()
   {
   	 $temas=Tema::all();
   	 return view('temas.mostrar-temas',['temas'=>$temas]);
   }


   public function aniadirTema(Request $request)
   {
      if($request->ajax())
      {
   	 	$tema=new Tema();
   		$tema->titulo =$request->input('aniadirTitulo');//$parametros["descripcion"];
		   $tema->descripcion = $request->input('aniadirDescripcion');
   		$tema->horas = (int)$request->input('aniadirHoras');
         $tema->save();
      }

   	 //  $temas=Tema::all();
		//echo  "Número de horas: ".$tema->horas." Titulo: ".$tema->titulo." ".$tema->descripcion;
    return 'Insertado correctamente';
   }

}
