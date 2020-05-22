@extends('layouts.base')

@section('content')
<div id="container" class="container-fluid">
	{{-- Apartado en el que se incluye el titulo de la pagina y el botón para mostrar y ocultar el apartado donde se crea un nuevo registro (Ver mAniadir.js)--}}
	<div class="row">
		<i class='iconos fas fa-book-reader' style="color: black"></i>  <h1>Cursos <button  class="btn btn-primary btnAniadir"><i class='fas fa-plus'></i>  Añadir Cursos</button></h1>
	</div>
	
	@include('cursos.crear-cursos')
	{{-- Apartado con el formulario para filtrar los datos de la tabla Cursos --}}
	<div id="filtrar">
		<form style="display:inline">
	   	<h3>Filtrar Cursos</h3>
	   	<label for="filtrarCursos">Curso</label>
	   	<select>
	   		<option value="0">Elije un curso</option>
	   		@foreach($cursos as $curso)
	   			<option>{{$curso->nombre_curso}}</option>
	   		@endforeach
	   	</select>
	 	<label for="filtrarClase">Clase</label>
	 	<select id="filtrarClase" name="filtrarClase">
	 		<option value="0">Elije una clase</option>
	 		@foreach($clases as $clase)
	 			<option value="{{$clase->id}}">{{$clase->nombre_clase}}</option>
	 		@endforeach
	 	</select>
	   	<label for="filtrarTemario">Temario</label>
	   	<select id="filtrarTemario" name="filtrarTemario">
	 		<option value="0">Elije una temario</option>
	 		@foreach($temarios as $temario)
	 			<option value="{{$temario->id}}">{{$temario->nombre_temario}}</option>
	 		@endforeach
	 	</select>
	   	<label for="filtrarHorario">Horario</label>
	   	<select id="filtrarHorario" name="filtrarHorario">
	 		<option value="0">Elije un horario</option>
	 		@foreach($horarios as $horario)
	 			<option value="{{$horario->id}}">{{$horario->nombre_horario}}</option>
	 		@endforeach
	 	</select>
	   	<button class="btn btn-warning">Filtrar</button>
	   </form>
	</div>

	<div>
	
	<table class="table">
	{{-- Tabla donde se muestran los datos de los alumnos. Aquí también se muestran los datos que surgen de filtrar la tabla de alumnos en la BD--}}
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Curso</th>
	      <th scope="col">Clase</th>
	      <th scope="col">Temario</th>
	      <th scope="col">Horarios</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>
      @foreach($cursos as $curso)
	   <tbody>
     		<tr>
			      <th scope="row">{{$curso->id}}</th>
			      <td>{{$curso->nombre_curso}}</td>
			      <td><a href="#">{{$curso->nombre_clase}}</a>  </td>
			      <td><a href="#">{{$curso->nombre_temario}}</a></td>
			      <td><a href="#">{{$curso->nombre_horario}}</a></td>	
			      <td>
			      	<span class="btn btn-success"><i class='fa fa-eye' title='Más información' ></i></span>
			      	{{-- Botón que muestra u oculta el formulario en el que se actualizar el registro al que acompaña (Ver mActualizar.js)--}}
			      	<span class="btnEditar btn btn-info"><i class='fas fa-pencil-alt' title='Editar'></i></span>
			      	{{-- Formulario que incluye el botón que hace que se borre el registro al que acompaña (ver borrar.js)--}}
			      	<form action="{{ asset('/borrarCursos/'.$curso->id) }}" method="post" class="borrarForm"> 
						<button class="btn btn-danger" style="padding: 0; height: 40px; width: 40px; margin: 5px 2px;">
							 @csrf
                             @method('DELETE')
							<i class="far fa-trash-alt" title='Borrar registro'></i>
						</button>
			      	</form>
			      </td>				      
	    	</tr>	
	    	<tr class="actualizar">
	    		{{--Explicación en curso-actualizar.blade.php--}}
	    		<td colspan="6">@include('cursos.actualizar-curso')</td>
	    	</tr>	 
		</tbody>
	  @endforeach
	  </table>	

	</div>
</div>
@endsection

@section('js')
	<script src="{{asset('js/mAniadir.js')}}"></script>
	<script src="{{asset('js/crear.js')}}"></script>
    <script src="{{asset('js/borrar.js')}}"></script>
    <script src="{{asset('js/mActualizar.js')}}"></script>
@endsection