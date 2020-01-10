<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $casts = [
   	 'fecha_nacimiento' => 'datetime:d-m-Y',
	];
}
