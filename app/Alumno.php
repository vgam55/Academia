<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
  public function scopeFindByName($query,$name)
  {
  	if(empty($name))
  	{
         
  	}
  	else
  	{
  		return $query->join('grupos',function($join){
          $join->on('alumnos.id_grupo','=','grupos.id_grupo');
      })->select('alumnos.id','alumnos.apellidos','alumnos.nombre','alumnos.email','alumnos.telefono','alumnos.fecha_nacimiento','grupos.nombre_grupo','grupos.id_grupo')->where('nombre','like','%'.$name.'%');
  	}
  	
  }

  public function scopeFindByApellidos($query, $secondName)
  {
  	if(empty($secondName))
  	{

  	}
  	else
  	{
  		return $query->join('grupos',function($join){
          $join->on('alumnos.id_grupo','=','grupos.id_grupo');
      })->select('alumnos.id','alumnos.apellidos','alumnos.nombre','alumnos.email','alumnos.telefono','alumnos.fecha_nacimiento','grupos.nombre_grupo','grupos.id_grupo')->where('apellidos','like','%'.$secondName.'%');
  	}
  	
  }

  public function scopeFindByEmail($query,$email)
  {
  	if(empty($email))
  	{

  	}
  	else
  	{
  		return $query->where('email','like','%'.$email.'%');
  	}
  }

  public function scopeFindByTelefono($query, $telefono)
  {
  	if(empty($telefono))
  	{

  	}
  	else
  	{
  		return $query->where('telefono','like','%'.$telefono.'%');
  	}
  }

  public function scopeFindByFecha($query, $fecha)
  {
  	if(empty($fecha))
  	{

  	}
  	else
  	{
  		return $query->where('fecha_nacimiento','<=',$fecha);
  	}
  }
  public function scopeFindByGrupo($query, $grupo)
  {
  	if(empty($grupo))
  	{

  	}
  	else
  	{
  		return $query->where('alumnos.id_grupo','=',$grupo);
  	}
  }
}
