<div id="aniadir">
	<form action="{{ url('/aniadirHorarios') }}" method="POST" class="aniadirForm" id="horarios" name="horarios">
    {{ csrf_field() }}
    {{ method_field('POST') }}
		<h3>Añadir Horario</h3>
  <!-- Fila 1-->
  <div class="row">    
    <div class="col">
      <label for="aniadirNombreHorario">Nombre de la Hora</label>
      <input type="text" class="form-control" id="aniadirNombreHorario"  name="aniadirNombreHorario" placeholder="Nombre del Horario">
    </div>
    <div class="col">
       <label for="aniadirHora1">Hora 1</label>
       <select class="form-control" id="aniadirHora1" name="aniadirHora1">
        <option value="0">Elije una hora </option>
        @foreach($horas as $hora)
         <option value="{{$hora->id}}">{{$hora->dia}} {{$hora->hora_ini}}-{{$hora->hora_fin}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
       <label for="aniadirHora2">Hora 2</label>
       <select class="form-control" id="aniadirHora2" name="aniadirHora2">
         <option value="0">Elije una hora </option>
         @foreach($horas as $hora)
           <option value="{{$hora->id}}">{{$hora->dia}} {{$hora->hora_ini}}-{{$hora->hora_fin}}</option>
         @endforeach
      </select>
    </div>
</div>

<div class="row">
    <div class="col">
       <label for="aniadirHora3">Hora 3</label>
       <select class="form-control" id="aniadirHora3" name="aniadirHora3">
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
       <label for="aniadirHora4">Hora 4</label>
       <select class="form-control" id="aniadirHora4" name="aniadirHora4">
        <option value="0">Elije una hora </option>
        @foreach($horas as $hora)
         <option value="{{$hora->id}}">{{$hora->dia}} {{$hora->hora_ini}}-{{$hora->hora_fin}}</option>
        @endforeach
      </select>
    </div>
  
    <div class="col">
       <label for="aniadirHora5">Hora 5</label>
       <select class="form-control" id="aniadirHora5" name="aniadirHora5">
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
	   		<button class="btn btn-success" id="btnAniadir">Añadir</button>
	</div>
</div>
</form>
</div>