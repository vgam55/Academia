<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hora;
class HorasController extends Controller
{
    public function listarHoras()
    {
    	$horas=Hora::all();
    	return view('horas.mostrar-horas',['horas'=>$horas]);
    }
}
