<!DOCTYPE html>
<html>
<head>
	<title>Profesores</title>
	<!-- Enlace para cargar bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Enlace para poner el icono identificativo-->
	<script src="https://kit.fontawesome.com/459debd0ca.js" crossorigin="anonymous"></script>
</head>
<body>
	
	<div>
		<h1><i class='fas fa-chalkboard' style='font-size:36px'></i> PROFESORES</h1>
	</div>
	
	<div>
	
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Apellidos</th>
	      <th scope="col">Email</th>
	      <th scope="col">Telefono</th>
	      <th scope="col">Titulo</th>
	    </tr>
	  </thead>
      @foreach($profesores as $profesor)
	   <tbody>
     		<tr>
			      <th scope="row">{{$profesor->id}}</th>
			      <td>{{$profesor->name}}  </td>
			      <td>{{$profesor->apellidos}}</td>
			      <td>{{$profesor->email}}</td>
			      <td>{{$profesor->telephone}}</td>
			      <td>{{$profesor->titulo}}</td>			      
	    	</tr>		 
		</tbody>
	  @endforeach
	  </table>	

	</div>
</body>
</html>