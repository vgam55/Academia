<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Grupo;
class Grupo extends Model
{
    protected $primaryKey ='id_grupo';

    public function scopeFindByNombre($query, $nombre)
    {
    	if(!empty($nombre))
    	{
    		$resultado=$query->where('nombre_grupo','like','%'.$nombre.'%');
    	}
    	return $resultado;
    }

    public function scopeFindByFecha($query,$fecha)
    {
    	if(!empty($nombre))
    	{
    		$resultado=$query->where('anio','>=',$fecha);
    	}
    	return $resultado;
    }
}
