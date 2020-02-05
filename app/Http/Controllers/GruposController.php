<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;
class GruposController extends Controller
{
    public function listarGrupos()
    {
    	$grupos=Grupo::all();
    	echo $grupos;
    }
}
