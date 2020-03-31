<div id="aniadir">
	<form>
		<h3>Añadir Horario</h3>
  <!-- Fila 1-->
  <div class="row">    
    <div class="col">
      <label for="aniadirNombreGrupo">Nombre de la Hora</label>
      <input type="text" class="form-control" id="crearNombreGrupo" placeholder="Nombre de la hora">
    </div>
    <div class="col">
       <label for="aniadirHora1">Hora 1</label>
       <select class="form-control" id="crearHora1">
        <option>Elije una hora </option>
        @foreach($horas as $hora)
         <option value="{{$hora->id}}">{{$hora->dia}} {{$hora->hora_ini}}-{{$hora->hora_fin}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
       <label for="aniadirHora2">Hora 2</label>
       <select class="form-control" id="aniadirHora2">
         <option>Elije una hora </option>
         @foreach($horas as $hora)
           <option value="{{$hora->id}}">{{$hora->dia}} {{$hora->hora_ini}}-{{$hora->hora_fin}}</option>
         @endforeach
      </select>
    </div>
</div>

<div class="row">
    <div class="col">
       <label for="aniadirHora3">Hora 3</label>
       <select class="form-control" id="aniadirHora3">
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
       <label for="aniadirHora4">Hora 4</label>
       <select class="form-control" id="aniadirHora4">
        <option>Elije una hora </option>
        @foreach($horas as $hora)
         <option value="{{$hora->id}}">{{$hora->dia}} {{$hora->hora_ini}}-{{$hora->hora_fin}}</option>
        @endforeach
      </select>
    </div>
  
    <div class="col">
       <label for="aniadirHora5">Hora 5</label>
       <select class="form-control" id="aniadirHora5">
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
	   		<button class="btn btn-success" id="btnAniadir">Añadir</button>
	</div>
</div>
</form>
</div>