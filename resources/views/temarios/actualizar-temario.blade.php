<div id="actualizar">
  <h3> Actualizar Temario</h3>

 <form action="{{ url('/actualizarTemarios/'.$temario->id) }}" method="POST" class="actualizarForm" id="actualizarTemarios" name="actualizarTemarios"> 
    {{ csrf_field() }}
    {{ method_field('PUT') }}
         <!-- Fila    1-->
  <div class="row">
    <div class="col">
      <label for="actualizarNombreTemario">Nombre del temario</label>
      <input type="text" class="form-control" id="actualizarNombreTemario" name="actualizarNombreTemario" value="{{$temario->nombre_temario}}">
    </div>
    <div class="col">
       <label for="actualiarTema1">Tema 1</label>
       <select class="form-control" id="actualizarTema1" name="actualizarTema1">
        <option value="0">Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
       <label for="actualizarTema2">Tema 2</label>
       <select class="form-control" id="actualizarTema2" name="actualizarTema2">
         <option value="0">Elije un tema </option>
         @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
         @endforeach
      </select>
    </div>
    <div class="col">
       <label for="actualizarTema3">Tema 3</label>
       <select class="form-control" id="actualizarTema3" name="actualizarTema3">
          <option value="0">Elije un tema </option>
         @foreach($temas as $tema)
          <option value="{{$tema->id}}">{{$tema->titulo}}</option>
         @endforeach
      </select>
    </div>
  </div>

     <!-- Fila 2-->
  <div class="row">
    <div class="col">
       <label for="actualizarTema4">Tema 4</label>
       <select class="form-control" id="actualizarTema4" name="actualizarTema4">
        <option value="0">Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>
  
    <div class="col">
       <label for="actualizarTema5">Tema 5</label>
       <select class="form-control" id="actualizarTema5" name="actualizarTema5">
         <option value="0">Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>

    <div class="col">
       <label for="actualizarTema6">Tema 6</label>
       <select class="form-control" id="actualizarTema6" name="actualizarTema6">
          <option value="0">Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
       <label for="actualizarTema7">Tema 7</label>
       <select class="form-control" id="actualizarTema7" name="actualizarTema7">
         <option value="0">Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>
  </div>

 <!-- Fila 3-->
  <div class="row">
     <div class="col">
       <label for="actualizarTema8">Tema 8</label>
       <select class="form-control" id="actualizarTema8" name="actualizarTema8">
          <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
  
    <div class="col">
       <label for="actualizarTema9">Tema 9</label>
       <select class="form-control" id="actualizarTema9" name="actualizarTema9">
          <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
            <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>

    <div class="col">
       <label for="actualizarTema10">Tema 10</label>
       <select class="form-control" id="actualizarTema10" name="actualizarTema10">
          <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
    <div class="col">
       <label for="actualizarTema11">Tema 11</label>
       <select class="form-control" id="actualizarTema11" name="actualizarTema11">
          <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
            <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
  </div>

     <!-- Fila 4-->
   <div class="row">
     <div class="col">
       <label for="actualizarTema12">Tema 12</label>
       <select class="form-control" id="actualizarTema12" name="actualizarTema12">
          <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
     </div>
  
    <div class="col">
       <label for="actualizarTema13">Tema 13</label>
       <select class="form-control" id="actualizarTema13" name="actualizarTema13">
          <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>

    <div class="col">
       <label for="actualizarTema14">Tema 14</label>
       <select class="form-control" id="actualizarTema14" name="actualizarTema14">
         <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
    <div class="col">
       <label for="actualizarTema15">Tema 15</label>
       <select class="form-control" id="actualizarTema15" name="actualizarTema15">
         <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
   </div>

  <button class="btn btn-success">Actualizar</button>

 </form>

</div>