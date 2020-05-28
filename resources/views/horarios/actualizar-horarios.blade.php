<div id="actualizar">
  {{-- Formulario que coje los datos que permite actualizar el registro correspondiente de la tabla Horarios (ver public/js/mActualizar.js)--}}
	<form action="{{ asset('/actualizarHorarios/'.$horario->id) }}" method="POST" class="actualizarForm" id="actualizarHorarios" name="actualizarHorarios">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
		<h3>Actualizar Horario</h3>
  <!-- Fila 1-->
  <div class="row">    
    <div class="col">
      <label for="actualizarNombreHorario">Nombre de la Hora</label>
      <input type="text" class="form-control" id="actualizarNombreHorario"  name="actualizarNombreHorario" placeholder="Nombre del Horario" value="{{$horario->nombre_horario}}">
    </div>
    <div class="col">
       <label for="actualizarHora1">Hora 1</label>
       <select class="form-control" id="actualizarHora1" name="actualizarHora1">
        <option value="0">Elije una hora </option>
        @foreach($horas as $hora)
         <option value="{{$hora->id}}">{{$hora->dia}} {{$hora->hora_ini}}-{{$hora->hora_fin}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
       <label for="actualizarHora2">Hora 2</label>
       <select class="form-control" id="actualizarHora2" name="actualizarHora2">
         <option value="0">Elije una hora </option>
         @foreach($horas as $hora)
           <option value="{{$hora->id}}">{{$hora->dia}} {{$hora->hora_ini}}-{{$hora->hora_fin}}</option>
         @endforeach
      </select>
    </div>
</div>

<div class="row">
    <div class="col">
       <label for="actualizarHora3">Hora 3</label>
       <select class="form-control" id="actualizarHora3" name="actualizarHora3">
          <option value="0">Elije una hora </option>
         @foreach($horas as $hora)
          <option value="{{$hora->id}}">{{$hora->dia}} {{$hora->hora_ini}}-{{$hora->hora_fin}}</option>
         @endforeach
      </select>
    </div>
  <div id="aniadir">
  </div>

   <!-- Fila 2-->
  <div class="row">
    <div class="col">
       <label for="actualizarHora4">Hora 4</label>
       <select class="form-control" id="actualizarHora4" name="actualizarHora4">
        <option value="0">Elije una hora </option>
        @foreach($horas as $hora)
         <option value="{{$hora->id}}">{{$hora->dia}} {{$hora->hora_ini}}-{{$hora->hora_fin}}</option>
        @endforeach
      </select>
    </div>
  
    <div class="col">
       <label for="actualizarHora5">Hora 5</label>
       <select class="form-control" id="actualizarHora5" name="actualizarHora5">
         <option value="0">Elije una hora </option>
        @foreach($horas as $hora)
         <option value="{{$hora->id}}">{{$hora->dia}} {{$hora->hora_ini}}-{{$hora->hora_fin}}</option>
        @endforeach
      </select>
    </div>
</div>
</div>
<br>
<div class="row">
	 <div class="col">
	   		<button class="btn btn-success" id="btnAniadir">Actualizar</button>
	</div>
</div>
</form>
</div>