<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Temario;
class TemariosController extends Controller
{
    public function listarTemarios()
    {
    	$temarios=Temario::all();
    	return view('temarios.mostrar-temarios',['temarios'=>$temarios]);
    }
}

