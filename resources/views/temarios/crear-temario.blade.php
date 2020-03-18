<form>
  <!-- Fila 1-->
  <div class="row">
    <h3>Añadir Temario</h3>
    <div class="col">
      <label for="nombreGrupo">Nombre del temario</label>
      <input type="text" class="form-control" placeholder="Nombre del temario">
    </div>
    <div class="col">
       <label for="tema1">Tema 1</label>
       <select class="form-control" id="tema1">
        <option>Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
       <label for="tema2">Tema 2</label>
       <select class="form-control" id="tema2">
         <option>Elije un tema </option>
         @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
         @endforeach
      </select>
    </div>
    <div class="col">
       <label for="tema3">Tema 3</label>
       <select class="form-control" id="tema3">
          <option>Elije un tema </option>
         @foreach($temas as $tema)
          <option value="{{$tema->id}}">{{$tema->titulo}}</option>
         @endforeach
      </select>
    </div>
  </div>

   <!-- Fila 2-->
  <div class="row">
    <div class="col">
       <label for="tema4">Tema 4</label>
       <select class="form-control" id="tema4">
        <option>Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>
  
    <div class="col">
       <label for="tema5">Tema 5</label>
       <select class="form-control" id="tema5">
         <option>Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>

    <div class="col">
       <label for="tema6">Tema 6</label>
       <select class="form-control" id="tema6">
          <option>Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
       <label for="tema7">Tema 7</label>
       <select class="form-control" id="tema7">
         <option>Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>
  </div>

   <!-- Fila 3-->
  <div class="row">
     <div class="col">
       <label for="tema8">Tema 8</label>
       <select class="form-control" id="tema8">
          <option>Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
  
    <div class="col">
       <label for="tema9">Tema 9</label>
       <select class="form-control" id="tema9">
          <option>Elije un tema </option>
          @foreach($temas as $tema)
            <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>

    <div class="col">
       <label for="tema10">Tema 10</label>
       <select class="form-control" id="tema10">
          <option>Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
    <div class="col">
       <label for="tema11">Tema 11</label>
       <select class="form-control" id="tema11">
          <option>Elije un tema </option>
          @foreach($temas as $tema)
            <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
  </div>

   <!-- Fila 4-->
   <div class="row">
  <div class="col">
       <label for="tema12">Tema 12</label>
       <select class="form-control" id="tema12">
          <option>Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
  
    <div class="col">
       <label for="tema13">Tema 13</label>
       <select class="form-control" id="tema13">
          <option>Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>

    <div class="col">
       <label for="tema14">Tema 14</label>
       <select class="form-control" id="tema14">
         <option>Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
    <div class="col">
       <label for="tema15">Tema 15</label>
       <select class="form-control" id="tema15">
         <option>Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
   </div>
</form>



