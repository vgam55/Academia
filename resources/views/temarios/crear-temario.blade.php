<div id="aniadir">
  {{-- Formulario con los campos que reciben los datos para crear una nuevo registro. Ver crear.js para acabar de ver el proceso completo--}}
  <h3>Añadir Temario</h3>

 <form action="{{ url('/aniadirTemarios')}}" method="POST" class="aniadirForm" id="temarios" name="temarios"> 
    {{ csrf_field() }}
    {{ method_field('POST') }}
         <!-- Fila    1-->
  <div class="row">
    <div class="col">
      <label for="aniadirNombreTemario">Nombre del temario</label>
      <input type="text" class="form-control" id="aniadirNombreTemario" name="aniadirNombreTemario" placeholder="Nombre del temario">
    </div>
    <div class="col">
       <label for="aniadirTema1">Tema 1</label>
       <select class="form-control" id="aniadirTema1" name="aniadirTema1">
        <option value="0">Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
       <label for="aniadirTema2">Tema 2</label>
       <select class="form-control" id="aniadirTema2" name="aniadirTema2">
         <option value="0">Elije un tema </option>
         @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
         @endforeach
      </select>
    </div>
    <div class="col">
       <label for="aniadirTema3">Tema 3</label>
       <select class="form-control" id="aniadirTema3" name="aniadirTema3">
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
       <label for="aniadirTema4">Tema 4</label>
       <select class="form-control" id="aniadirTema4" name="aniadirTema4">
        <option value="0">Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>
  
    <div class="col">
       <label for="aniadirTema5">Tema 5</label>
       <select class="form-control" id="aniadirTema5" name="aniadirTema5">
         <option value="0">Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>

    <div class="col">
       <label for="aniadirTema6">Tema 6</label>
       <select class="form-control" id="aniadirTema6" name="aniadirTema6">
          <option value="0">Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
       <label for="aniadirTema7">Tema 7</label>
       <select class="form-control" id="aniadirTema7" name="aniadirTema7">
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
       <label for="aniadirTema8">Tema 8</label>
       <select class="form-control" id="aniadirTema8" name="aniadirTema8">
          <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
  
    <div class="col">
       <label for="aniadirTema9">Tema 9</label>
       <select class="form-control" id="aniadirTema9" name="aniadirTema9">
          <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
            <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>

    <div class="col">
       <label for="aniadirTema10">Tema 10</label>
       <select class="form-control" id="aniadirTema10" name="aniadirTema10">
          <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
    <div class="col">
       <label for="aniadirTema11">Tema 11</label>
       <select class="form-control" id="aniadirTema11" name="aniadirTema11">
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
       <label for="aniadirTema12">Tema 12</label>
       <select class="form-control" id="aniadirTema12" name="aniadirTema12">
          <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
     </div>
  
    <div class="col">
       <label for="aniadirTema13">Tema 13</label>
       <select class="form-control" id="aniadirTema13" name="aniadirTema13">
          <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>

    <div class="col">
       <label for="aniadirTema14">Tema 14</label>
       <select class="form-control" id="aniadirTema14" name="aniadirTema14">
         <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
    <div class="col">
       <label for="aniadirTema15">Tema 15</label>
       <select class="form-control" id="aniadirTema15" name="aniadirTema15">
         <option value="0">Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
   </div>

  <button class="btn btn-success">Añadir</button>

 </form>

</div>




