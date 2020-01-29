<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProfesoresController extends Controller
{
    public function listarProfesores()
    {
    	$profesores=DB::table('profesores')
    			    ->join('users','profesores.id_user','=','users.id')
    			    ->select('users.name','users.apellidos','users.email','users.telephone','profesores.titulo')
    			    ->get();
    	return view('profesores.mostrar-profesores',['profesores'=>$profesores]);
    }
}
