<!DOCTYPE html>
<html>
<head>
	<title>Temas</title>
	<!-- Enlace para cargar bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Enlace para poner el icono identificativo-->
	<script src="https://kit.fontawesome.com/459debd0ca.js" crossorigin="anonymous"></script>
</head>
<body>
	<div>
		<h1><i class='fas fa-list' style='font-size:36px'></i> TEMAS</h1>
	</div>
	
	<div>
	
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Titulo</th>
	      <th scope="col">Descripción</th>
	      <th scope="col">Horas</th>
	    </tr>
	  </thead>
      @foreach($temas as $tema)
	   <tbody>
     		<tr>
			      <th scope="row">{{$tema->id}}</th>
			      <td>{{$tema->titulo}}  </td>
			      <td>{{$tema->descripcion}}</td>
			      <td>{{$tema->horas}}</td>    
	    	</tr>		 
		</tbody>
	  @endforeach
	  </table>	

	</div>
</body>
</html>