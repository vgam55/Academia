@extends('layouts.base')

@section('content')
<div id="container" class="container-fluid">
	<div>
		<h1><i class='iconos fas fa-clock' style="color:black"></i></i></i>Horas <butoon class="btn btn-primary btnAniadir"><i class='fas fa-plus btnAniadir' ></i>  Añadir Hora</button></h1>
	</div>
	 @include('horas.crear-horas')
	<div id="filtrar">
		<form style="display:inline">
	   	<h3>Filtrar Horas</h3>
	 	<label for="filtrarDia">Día</label>
	   	<select id="filtrarDia" nombre="filtrarDia">
	   		<option value="0">Elige un día</option>
	   		<option value="Lunes">Lunes</option>
	   		<option value="Martes">Martes</option>
	   		<option value="Miercoles">Miercoles</option>
	   		<option value="Jueves">Jueves</option>
	   		<option value="Viernes">Viernes</option>
	   		<option value="Sabado">Sabado</option>
	   		<option value="Domingo">Domingo</option>
	   	</select>
	   	<label for="filtrarHoraIni">Hora Inicio</label>
	   	<input type="time" id="filtrarHoraIni"></input>
	   	<label for="filtrarHoraFin">Hora Inicio</label>
	   	<input type="time" id="filtrarHoraFin"></input>
	   	<button class="btn btn-warning">Filtrar</button>
	   </form>
	</div>
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Día</th>
	      <th scope="col">Hora de inicio</th>
	      <th scope="col">Hora de fin</th>

	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>

		@foreach($horas as $hora)
			<tbody>
				<tr>
			      <th scope="row">{{$hora->id}}</th>
			      <td>{{$hora->dia}}</td>
			      <td>{{$hora->hora_ini}}</td>
			      <td>{{$hora->hora_fin}}</td>
			      <td>
			      	<span class="btn btn-success"><i class='fa fa-eye' title='Más información' ></i></span> 
			      	<span class="btnEditar btn btn-info"><i class='fas fa-pencil-alt' title='Editar'></i></span>
			      	<form action="{{url('/borrarHoras/'.$hora->id)}}" method="post" class="borrarForm"> 
						<button class="btn btn-danger" style="padding: 0; height: 40px; width: 40px; margin: 5px 2px;">
							 @csrf
                             @method('DELETE')
							<i class="far fa-trash-alt" title='Borrar registro'></i>
						</button>
			      	</form>
			      	<span class="btn btn-succes"><i class='iconos fas fa-list' title="Mostrar Temas"></i></span>
			      </td>		
	    		</tr>

	    		<tr class="actualizar">
	    			<td colspan="5">@include('horas.actualizar-horas')</td>
	    		</tr>
		    </tbody>
		@endforeach

		</table>
	</div>
@endsection

@section('js')
	<script src="{{asset('js/mAniadir.js')}}"></script>
	<script src="{{asset('js/crear.js')}}"></script>
	<script src="{{asset('js/borrar.js')}}"></script>
	<script src="{{asset('js/mActualizar.js')}}"></script>
@endsection