<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clase;
class ClasesController extends Controller
{
    public function listarClases()
    {
    	$clases=Clase::all();
    	return view('clases.mostrar-clases',['clases'=>$clases]);
    }
}
