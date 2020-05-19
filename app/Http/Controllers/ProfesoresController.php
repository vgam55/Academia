<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profesor;
use App\User;

class ProfesoresController extends Controller
{
    public function listarProfesores()
    {
         /*
            Coge todos los profesores para mostrarlos en una tabla según se carga la pagina.
            También se mandan los datos que cada profesor tienen guardados en la tabla de usuarios
        */
    	$profesores=DB::table('profesores')
    			    ->join('users','profesores.id_user','=','users.id')
    			    ->select('users.name','users.apellidos','users.email','users.telephone','profesores.id','profesores.titulo')
    			    ->get();
    	return view('profesores.mostrar-profesores',['profesores'=>$profesores]);
    }

    public function aniadirProfesores(Request $request)
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
            $existe=User::where([ ['name','=',$request->input('aniadirNombre')], ['apellidos','=',$request->input('aniadirApellidos')], ['telephone','=',$request->input('aniadirTelefono')], ['email','=',$request->input('aniadirEmail')]] )->get();

            if(count($existe)==0)
            {
                $usuario=new User();
                $usuario->name=$request->input('aniadirNombre');
                $usuario->apellidos=$request->input('aniadirApellidos');
                $usuario->email=$request->input('aniadirEmail');
                $usuario->telephone=$request->input('aniadirTelefono');
                $usuario->password=bcrypt($request->input('password'));
                $usuario->save();
                $foreing=User::max('id');
                $profesor=new Profesor();
                $profesor->id_user=$foreing;
                $profesor->titulo=$request->input('aniadirTitulo');
                $profesor->save();
                $resultado="Registro guardado con exito";
            }
            else
            {
                $resultado="No se pudo guardar el registro. Ya existe uno igual";
            }     
        } 
        return $resultado;
    }

    public function borrarProfesor($id)
    {
        /*
          Borra el registro a partir del id que recibe y se avisa del resultado
        */
        $resultado="No se pudo borrar el registro";
        $profesor=Profesor::find($id);
        $borrado=$profesor->delete();
        if($borrado>0)
        {
            $resultado="Registro borrado con exito";
        }
        return $resultado;
    }

    public function actualizarProfesor(Request $request, $id)
    {
        /*
            Se busca un registro por su id para actualizarlo en función de los
            datos recibidos por medio del formulario.
        */
        $resultado="No se pudo actualizar el registro";
        $profesor=Profesor::find($id);
        $usuario=User::find($profesor->id_user);
        $profesor->titulo=$request->input('actualizarTitulo');
        $actualizarProfe=$profesor->save();
        $usuario->name=$request->input('actualizarNombre');
        $usuario->apellidos=$request->input('actualizarApellidos');
        $usuario->email=$request->input('actualizarEmail');
        $usuario->telephone=$request->input('actualizarTelefono');
        $actualizarUser=$usuario->save();
        if(($actualizarProfe>0)&&($actualizarUser>0))
        {
            $resultado="Registro actualizado con exito";
        }
        return $resultado;
    }
}
