<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clase;
use Illuminate\Support\Facades\DB;
class ClasesController extends Controller
{
    public function listarClases()
    {
    	$clases=array();
    	$i=0;
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
    	return view('clases.mostrar-clases',['clases'=>$clases]);
    }
}



/*
  $articles =DB::table('articles') 
  ->join('categories', 'articles.id', '=', 'categories.id') 
  ->join('users', 'users.id', '=', 'articles.user_id') ->select('articles.id','articles.title','articles.body','users.username', 'category.name') ->get();*/