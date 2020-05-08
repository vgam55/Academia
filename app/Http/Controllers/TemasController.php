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
      //$userRecord = Model::where([['email','=',$email],['password','=', $password]])->first();
      $existe="";
      $resultado='El registro no se pudo insertar';
      if($request->ajax())
      {
         $existe=Tema::where([['titulo','=',$request->input('aniadirTitulo')],['descripcion','=',$request->input('aniadirDescripcion')],['horas','=',(int)$request->input('aniadirHoras')]])->get();
      if(count($existe)==0)
         {
            $tema=new Tema();
            $tema->titulo =$request->input('aniadirTitulo');//$parametros["descripcion"];
            $tema->descripcion = $request->input('aniadirDescripcion');
            $tema->horas = (int)$request->input('aniadirHoras');
            $tema->save();
            $resultado='Registro insertado conrrectamente';
         }
         else
         {
            $resultado='El registro ya existe';
         }
   	 	
      }

   //  $temas=Tema::all();
		//echo  "Número de horas: ".$tema->horas." Titulo: ".$tema->titulo." ".$tema->descripcion;
  return $resultado;
   }

   public function borrarTema($id)
   {
      $resultado="No se pudo borrar el registro";
      $tema=Tema::find($id);
      $borrado=$tema->delete();
      if($borrado>0)
      {
         $resultado="Registro borrado con exito";
      }
      return $resultado;
   }

}
