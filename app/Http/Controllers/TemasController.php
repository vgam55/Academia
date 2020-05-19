<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tema;
class TemasController extends Controller
{
   public function listarTemas()
   {
       /*
            Coge todos los temas para mostrarlos en una tabla según se carga la pagina.
        */
   	 $temas=Tema::all();
   	 return view('temas.mostrar-temas',['temas'=>$temas]);
   }


   public function aniadirTema(Request $request)
   {
      /*
            Si se llega a este metodo con una llamada Ajax se busca si existe un registro
            con los mismos datos, si existe, no se hace nada y se avisa. Si no existe se 
            crea un nuevo registro con esos datos y se avisa
        */
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
  return $resultado;
   }

   public function borrarTema($id)
   {
        /*
          Borra el registro a partir del id que recibe y se avisa del resultado
        */
      $resultado="No se pudo borrar el registro";
      $tema=Tema::find($id);
      $borrado=$tema->delete();
      if($borrado>0)
      {
         $resultado="Registro borrado con exito";
      }
      return $resultado;
   }

   public function actualizarTema(Request $request, $id)
   {
        /*
            Se busca un registro por su id para actualizarlo en función de los
            datos recibidos por medio del formulario.
        */
      $resultado="No se pudo actualizar el registro";
      $tema=Tema::find($id);
      $tema->titulo=$request->input('actualizarTitulo');
      $tema->descripcion=$request->input('actualizarDescripcion');
      $tema->horas=$request->input('actualizarHoras');
      $actualizado=$tema->save();
      if($actualizado>0)
      {
         $resultado="Registro actualizado con exito";
      }
      return $resultado;
   }

}
