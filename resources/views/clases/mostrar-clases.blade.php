<!DOCTYPE html>
<html>
<head>
	<title>Clases</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/459debd0ca.js" crossorigin="anonymous"></script>
</head>
<body>
	<div></div>
	<h1><i class='fas fa-chalkboard' style='font-size:36px'></i> CLASES</h1>
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
</body>
</html>