<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
   protected $cast=[
   		'anio'=>'date_time:d-m-Y', 
   ];
}
