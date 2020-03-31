<div id="aniadir">
  <h3>Añadir Temario</h3>

 <form>  <!-- Fila 1-->
  <div class="row">
    <div class="col">
      <label for="aniadirNombreTemario">Nombre del temario</label>
      <input type="text" class="form-control" id="aniadirNombreTemario" placeholder="Nombre del temario">
    </div>
    <div class="col">
       <label for="aniadirTema1">Tema 1</label>
       <select class="form-control" id="aniadirTema1">
        <option>Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
       <label for="aniadirTema2">Tema 2</label>
       <select class="form-control" id="aniadirTema2">
         <option>Elije un tema </option>
         @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
         @endforeach
      </select>
    </div>
    <div class="col">
       <label for="aniadirTema3">Tema 3</label>
       <select class="form-control" id="aniadirTema3">
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
       <label for="aniadirTema4">Tema 4</label>
       <select class="form-control" id="aniadirTema4">
        <option>Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>
  
    <div class="col">
       <label for="aniadirTema5">Tema 5</label>
       <select class="form-control" id="aniadirTema5">
         <option>Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>

    <div class="col">
       <label for="aniadirTema6">Tema 6</label>
       <select class="form-control" id="aniadirTema6">
          <option>Elije un tema </option>
        @foreach($temas as $tema)
         <option value="{{$tema->id}}">{{$tema->titulo}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
       <label for="aniadirTema7">Tema 7</label>
       <select class="form-control" id="aniadirTema7">
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
       <label for="aniadirTema8">Tema 8</label>
       <select class="form-control" id="aniadirTema8">
          <option>Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
  
    <div class="col">
       <label for="aniadirTema9">Tema 9</label>
       <select class="form-control" id="aniadirTema9">
          <option>Elije un tema </option>
          @foreach($temas as $tema)
            <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>

    <div class="col">
       <label for="aniadirTema10">Tema 10</label>
       <select class="form-control" id="aniadirTema10">
          <option>Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
    <div class="col">
       <label for="aniadirTema11">Tema 11</label>
       <select class="form-control" id="aniadirTema11">
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
       <label for="aniadirTema12">Tema 12</label>
       <select class="form-control" id="aniadirTema12">
          <option>Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
     </div>
  
    <div class="col">
       <label for="aniadirTema13">Tema 13</label>
       <select class="form-control" id="aniadirTema13">
          <option>Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>

    <div class="col">
       <label for="aniadirTema14">Tema 14</label>
       <select class="form-control" id="aniadirTema14">
         <option>Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
    <div class="col">
       <label for="aniadirTema15">Tema 15</label>
       <select class="form-control" id="aniadirTema15">
         <option>Elije un tema </option>
          @foreach($temas as $tema)
           <option value="{{$tema->id}}">{{$tema->titulo}}</option>
          @endforeach
      </select>
    </div>
   </div>

  <button class="btn btn-success">Añadir</button>

 </form>

</div>




