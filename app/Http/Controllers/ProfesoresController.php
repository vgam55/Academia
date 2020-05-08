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
    	$profesores=DB::table('profesores')
    			    ->join('users','profesores.id_user','=','users.id')
    			    ->select('users.name','users.apellidos','users.email','users.telephone','profesores.id','profesores.titulo')
    			    ->get();
    	return view('profesores.mostrar-profesores',['profesores'=>$profesores]);
    }

    public function aniadirProfesores(Request $request)
    {
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
        $resultado="No se pudo borrar el registro";
        $profesor=Profesor::find($id);
        $borrado=$profesor->delete();
        if($borrado>0)
        {
            $resultado="Registro borrado con exito";
        }
        return $resultado;
    }
}
