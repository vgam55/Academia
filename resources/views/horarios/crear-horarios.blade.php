<div id="aniadir">
	<form>
		<h3>Añadir Horario</h3>
  <!-- Fila 1-->
  <div class="row">    
    <div class="col">
      <label for="nombreGrupo">Nombre del Hora</label>
      <input type="text" class="form-control" placeholder="Nombre de la hora">
    </div>
    <div class="col">
       <label for="hora1">Hora 1</label>
       <select class="form-control" id="hora1">
        <option>Elije una hora </option>
        @foreach($horas as $hora)
         <option value="{{$hora->id}}">{{$hora->dia}} {{$hora->hora_ini}}-{{$hora->hora_fin}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
       <label for="hora2">Hora 2</label>
       <select class="form-control" id="hora2">
         <option>Elije una hora </option>
         @foreach($horas as $hora)
           <option value="{{$hora->id}}">{{$hora->dia}} {{$hora->hora_ini}}-{{$hora->hora_fin}}</option>
         @endforeach
      </select>
    </div>
</div>

<div class="row">
    <div class="col">
       <label for="hora3">Hora 3</label>
       <select class="form-control" id="hora3">
          <option>Elije una hora </option>
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
       <label for="hora4">Hora 4</label>
       <select class="form-control" id="hora4">
        <option>Elije una hora </option>
        @foreach($horas as $hora)
         <option value="{{$hora->id}}">{{$hora->dia}} {{$hora->hora_ini}}-{{$hora->hora_fin}}</option>
        @endforeach
      </select>
    </div>
  
    <div class="col">
       <label for="tema5">Hora 5</label>
       <select class="form-control" id="hora5">
         <option>Elije una hora </option>
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
	   		<button class="btn btn-success ">Añadir</button>
	</div>
</div>
</form>
</div>