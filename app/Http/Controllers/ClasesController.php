<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clase;
use Illuminate\Support\Facades\DB;
class ClasesController extends Controller
{
    public function listarClases()
    {
    	$clases=DB::table('clases')
    			->join('grupos','id_grupo','=','grupos.id')
    			->join('profesores', 'id_profesor','=','profesores.id')
    			->join('users','profesores.id_user','=','users.id')
    			->select('clases.id','grupos.nombre','users.name','users.apellidos')
    			->get();
   		$profesores=DB::table('users')
   					->join('profesores','users.id','=','profesores.id')
   					->select('profesores.id', 'users.name', 'users.apellidos')
   					->get();
    	return view('clases.mostrar-clases',['clases'=>$clases,
                                           'profesores'=>$profesores]);
    }
}



