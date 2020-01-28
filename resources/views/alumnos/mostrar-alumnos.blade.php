<!DOCTYPE html>
<html>
<head>
	<title>Alumnos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	  <script src="https://kit.fontawesome.com/459debd0ca.js" crossorigin="anonymous"></script>
     <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
</head>
<body>
<div id="container" class="container-fluid">
	<div>
		<h1><i class='fas fa-user-graduate' style='font-size:36px'></i>  ALUMNOS</h1>
	</div>
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Apellidos</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Correo Electronico</th>
	      <th scope="col">Telefono</th>
	      <th scope="col">Fecha de nacimiento</th>
	      <th scope="col">Grupo</th>
	    </tr>
	  </thead>

		@foreach($alumnos as $alumno)
			<tbody>
				<tr>
			      <th scope="row">{{$alumno->id}}</th>
			      <td>{{$alumno->apellidos}}</td>
			      <td>{{$alumno->nombre}}</td>
			      <td>{{$alumno->email}}</td>
			      <td>{{$alumno->telefono}}</td>
			      <td>{{$alumno->fecha_nacimiento}}</td>
			      <td>{{$alumno->id_grupo}}</td>
	    		</tr>
		    </tbody>
		@endforeach

		</table>
	</div>
</body>
</html>