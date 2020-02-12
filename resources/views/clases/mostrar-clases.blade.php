@extends('layouts.base')

@section('content')
	<div id="container" class="container-fluid">
		<h1><span class="icon-container"><i class='iconos fas fa-chalkboard' style='font-size:36px'></i></span> CLASES</h1>
	</div>
	
	<div>
	
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Profesor</th>
	      <th scope="col">Grupo</th>
	    </tr>
	  </thead>
      @foreach($clases as $clase)
	   <tbody>
     		<tr>
			      <th scope="row">{{$clase->id}}</th>
			      <td>{{$clase->name}}  {{$clase->apellidos}}</td>
			      <td>{{$clase->nombre}}</td>			      
	    	</tr>		 
		</tbody>
	  @endforeach
	  </table>	

	</div>
@endsection