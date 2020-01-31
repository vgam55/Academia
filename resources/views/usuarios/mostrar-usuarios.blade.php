<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
	<!-- Enlace para cargar bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Enlace para poner el icono identificativo-->
	<script src="https://kit.fontawesome.com/459debd0ca.js" crossorigin="anonymous"></script>
</head>
</head>
<body>
	
	<div>
		<h3><i class='fas fa-user-tie' style='font-size:36px'></i>   USUARIOS</h3>
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
	    </tr>
	  </thead>
      @foreach($usuarios as $usuario)
	   <tbody>
     		<tr>
			      <th scope="row">{{$usuario->id}}</th>
			      <td>{{$usuario->name}}  </td>
			      <td>{{$usuario->apellidos}}</td>
			      <td>{{$usuario->email}}</td>
			      <td>{{$usuario->telephone}}</td>		      
	    	</tr>		 
		</tbody>
	  @endforeach
	  </table>	

	</div>
</body>
</html>