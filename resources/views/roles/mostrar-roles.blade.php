@extends('layouts.base')

@section('content')
<div id="container" class="container-fluid">
	<div>
		<h1><i class='iconos fas fa-user-lock' style="color:black"></i></i></i>ROLES</h1>
	</div>
	
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>

		@foreach($roles as $rol)
			<tbody>
				<tr>
			      <th scope="row">{{$rol->id}}</th>
			      <td>{{$rol->name}}</td>
			      <td>
			      	<form action="#" method="post" data-extra="#" style="display:inline"> 
						<button>Editar</button>
			      	</form>
	    		</tr>
		    </tbody>
		@endforeach
		</table>

		<hr>

	<div>
		<h1><i class='iconos fas fa-user-lock' style="color:black"></i></i></i>Listado de permisos.</h1>
	</div>
	<div id="permisos">
	</div>
	</div>
@endsection