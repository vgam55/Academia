<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    protected $cast=['hora_ini'=>'datetime:H:i:s',];
}
