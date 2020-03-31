@extends('layouts.base')

@section('content')
<div id="container" class="container-fluid">
	<div>
		<h1><i class='iconos fas fa-book' style="color:black"></i></i>HORARIOS <button class="btn btn-primary btnAniadir"><i class='fas fa-plus btnAniadir' ></i>  Añadir Horarios</button></h1>
	</div>
	 @include('horarios.crear-horarios')
	<div id="filtrar">
		<form style="display:inline">
	   	<h3>Filtrar Horarios</h3>
	 	<label for="filtrarNombreHorario">Nombre</label>
	   	<input type="text" id="filtrarNombreHorario"></input>
	   	<label for="filtrarHoraIni">Hora Inicio</label>
	   	<input type="text" id="filtrarHoraIni"></input>
	   	<button class="btn btn-warning">Filtrar</button>
	   </form>
	</div>
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Hora 1</th>
	      <th scope="col">Hora 2</th>
	      <th scope="col">Hora 3</th>
		  <th scope="col">Hora 4</th>
		  <th scope="col">Hora 5</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>

		@foreach($horarios as $horario)
			<tbody>
				<tr>
			      <th scope="row">{{$horario->id}}</th>
			      <td>{{$horario->nombre_horario}}</td>
			      <td>{{$horario->hora1}}</td>
			      <td>{{$horario->hora2}}</td>
			      <td>{{$horario->hora3}}</td>
			      <td>{{$horario->hora4}}</td>
			      <td>{{$horario->hora5}}</td>
			      
			      <td>
			      	<span class="btn btn-success"><i class='fa fa-eye' title='Más información' ></i></span> 
			      	<span class="btn btn-info"><i class='fas fa-pencil-alt' title='Editar'></i></span>
			      	<form action="#" method="post" data-extra="#" style="display:inline"> 
						<button class="btn btn-danger" style="padding: 0; height: 40px; width: 40px; margin: 5px 2px;">
							 @csrf
                             @method('DELETE')
							<i class="far fa-trash-alt" title='Borrar registro'></i>
						</button>
			      	</form>
			      	<span class="btn btn-succes"><i class='iconos fas fa-list' title="Mostrar Horarios"></i></span>
			      </td>		
	    		</tr>
		    </tbody>
		@endforeach

		</table>
	</div>
@endsection

@section('js')
	<script src="{{asset('js/mAniadir.js')}}"></script>
@endsection