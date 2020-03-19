<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Grupo;
class Grupo extends Model
{
    public function listarGrupos()
    {
    	$grupos=Grupo::all();
    	return view('grupos.mostrar-grupos',['grupos'=>$grupos]);
    }
}
