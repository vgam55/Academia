@extends('layouts.base')

@section('content')
<div id="container" class="container-fluid">
	<div class="row">
		<h1><span class="icon-container"><i class='iconos fas fa-book-reader'></i></span> <span class="col-10">Cursos</span></h1>
	</div>
		<div>
	
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Clase/th>
	      <th scope="col">Temario</th>
	      <th scope="col">Horarios</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>
      @foreach($cursos as $curso)
	   <tbody>
     		<tr>
			      <th scope="row">{{$curso->id}}</th>
			      <td>{{$curso->id_clase}}  </td>
			      <td>{{$curso->id_temario}}</td>
			      <td>{{$curso->id_horario}}</td>	
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
			      </td>				      
	    	</tr>		 
		</tbody>
	  @endforeach
	  </table>	

	</div>
</div>
@endsection