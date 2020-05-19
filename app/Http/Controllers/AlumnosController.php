<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Alumno;
use App\Grupo;
class AlumnosController extends Controller
{
    public function listarAlumnos()
    {
        /*
            Coge todos los alumnos para mostrarlos en una tabla según se carga la pagina.
            También se mandan los grupos que existen a la vista para crear los select de 
            los formularios que serviran npara filtrar el contenido de una tabla o para
            crear un nuevo registro
        */
    	$alumnos=Alumno::all();
    	$alumnos=DB::table('alumnos')
    			->join('grupos','alumnos.id_grupo','=','grupos.id_grupo')
    			->select('alumnos.id','alumnos.apellidos','alumnos.nombre','alumnos.email','alumnos.telefono','alumnos.fecha_nacimiento','grupos.nombre_grupo','grupos.id_grupo')
    			->get();
    	$grupos=Grupo::all();
    	return view('alumnos.mostrar-alumnos',['alumnos'=>$alumnos,
    											'grupos'=>$grupos]);
    }

    public function aniadirAlumno(Request $request)
    {
        /*
            Si se llega a este metodo con una llamada Ajax se busca si existe un registro
            con los mismos datos, si existe, no se hace nada y se avisa. Si no existe se 
            crea un nuevo registro con esos datos y se avisa
        */
    	$resultado="El registro no pudo guardarse";
    	$existe="";    
        if($request->ajax())
        {
            $existe=Alumno::where([ ['nombre','=',$request->input('aniadirNombre')], ['apellidos','=',$request->input('aniadirApellidos')], ['telefono','=',$request->input('aniadirTelefono')], ['email','=',$request->input('aniadirEmail')], ['id_grupo','=',$request->input('aniadirGrupo')] ])->get();
            if(count($existe)==0)
            {
                $alumno=new Alumno();
                $alumno->nombre=$request->input('aniadirNombre');
                $alumno->apellidos=$request->input('aniadirApellidos');
                $alumno->telefono=$request->input('aniadirTelefono');
                $alumno->email=$request->input('aniadirEmail');
                $alumno->id_grupo=$request->input('aniadirGrupo');
                $alumno->fecha_nacimiento=$request->input('aniadirFecha');
                $alumno->save();
                $resultado='Registro insertado conrrectamente';
            }
            else
            {
                $resultado='El registro ya existia';
            }
        }
      return $resultado;
    }

    public function borrarAlumno($id)
    {
        /*
          Borra el registro a partir del id que recibe y se avisa del resultado
        */
        $resultado="No se pudo borrar el registro";
        $alumno=Alumno::find($id);
        $borrado=$alumno->delete();
        if($borrado==1)
        {
            $resultado="Registro borrado con exito";
        }
        echo $resultado;
    }

    public function actualizarAlumno(Request $request, $id)
    {
        /*
            Se busca un registro por su id para actualizarlo en función de los
            datos recibidos por medio del formulario.
        */
        $resultado="No se pudo actualizar los datos del alumno";
        $alumno=Alumno::find($id);
            $alumno->nombre=$request->input('actualizarNombre');
            $alumno->apellidos= $request->input('actualizarApellidos');
            $alumno->email= $request->input('actualizarEmail');
            $alumno->telefono= $request->input('actualizarTelefono');
            $alumno->fecha_nacimiento= $request->input('actualizarFecha');
            if($request->input('actualizarGrupo')>0)
                { 
                    $alumno->id_grupo= $request->input('actualizarGrupo');
                }
           $total= $alumno->save();
           if($total>0)
           {
            $resultado="Registro actualizado con exito";
           }  
        return $resultado;
    }
}
