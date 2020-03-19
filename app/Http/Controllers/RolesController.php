<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;
class RolesController extends Controller
{
    public function listarRoles()
    {
    	$roles=Rol::all();
    	return view('roles.mostrar-roles',['roles'=>$roles]);
    }
}
