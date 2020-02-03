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
}
