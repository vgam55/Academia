<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Academia</title>

        <!-- Enlace para cargar bootstrap-->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
       <link rel="stylesheet" href="{{ asset('css/iconos.css')}}">
       <link rel="stylesheet" href="{{ asset('css/principal.css')}}">
       <!-- Enlace para crear los iconos-->
       <script src="https://kit.fontawesome.com/459debd0ca.js" crossorigin="anonymous"></script>
       
     <style>
      
     </style>
    </head>
    <body>
       <div class="container-fluid" id="container">
            <header class="row">
               <div id="marcoLogo" id= "icon-container" class="col-3"><i id="logo" class=' iconos fas fa-school'></i></i>  
               </div>
                <div class="col-7">
                    <span>ACADEMIA</span>
                    <span>{{ Auth::user()->name}}</span>
                </div>
                <div class="col-4">
                    <form action="{{ url('logout') }}" method="post">
                        {{ csrf_field() }}
                         <button  class="btn btn-primary" style='font-size:24px'>Salir </button>
                     </form>
                </div>
            </header>
             <div class="row">
                 <h1>Personal, Clientes, Administración</h1>
                 <hr>
             </div>
             <div class="row">
                <div class="icon-container">  
                    {{--<a href="{{ url('/usuarios')}}"><span class="col-2 icon-container"><i class='iconos fas fa-user-tie'><span></i></a>--}}
                   <i class='iconos fas fa-user-tie'></i>
                   <br>
                   <a href="{{ url('/usuarios')}}"><h3>Usuarios</h3></a>
                </div>      

                <div class="icon-container">
                    {{--<a href="" class="col-2 icon-container" ><span> <i class='iconos fas fa-user-lock'></i></a>--}}
                    <i class='iconos fas fa-user-lock'></i>
                    <br>
                    <a href="{{url('/roles')}}" ><h3>Roles</h3></sa>
                </div>
                <div class="icon-container">
                   {{--<a href="{{url('/alumnos')}}" class="icon-container col-2" ><i class='iconos fas fa-user-graduate'></i></a>--}}
                   <i class='iconos fas fa-user-graduate'></i>
                   <br>
                   <a href="{{url('/alumnos')}}" ><h3>Alumnos</h3></a>
                </div>
                <div class="icon-container">
                   {{-- <a href="{{ url('/profesores') }}" class="icon-container col-2" ><i class='iconos fas fa-chalkboard-teacher' style='font-size:36px'></i></a>--}}
                   <i class='iconos fas fa-chalkboard-teacher'></i>
                   <br>
                   <a href="{{ url('/profesores') }}"><h3>Profesores</h3></a>
                </div>
                <div class="icon-container">
                    {{--<a href="{{ url('/temas')}}" class="icon-container col-2" ><i class='iconos fas fa-list'></i></a>--}}
                    <i class='iconos fas fa-list'></i>
                    <br>
                    <a href="{{ url('/temas')}}"><h3>Temas</h3></a>
                </div>

                <div class="icon-container">
                   <i class='iconos fas fa-clock'></i>
                    <br>
                    <a href="{{ url('/horas')}}"><h3>Horas</h3></a>
                </div>
                
            </div>  
            
            <br>
            <br>
            <div class="row"> 
                <h1>Servicios</h1></a>
                <hr>
            </div>

             <div class="row">
                <div class="icon-container">
                   {{-- <a href="{{ url('/cursos')}}">  <i class='iconos fas fa-book-reader'></i> </a>--}}
                   <i class='iconos fas fa-book-reader'></i>
                   <br>
                   <a href="{{ url('/cursos')}}"><h3>Cursos</h3>  </a>  
                </div>
                <div class="icon-container">
                   {{-- <a href="{{url('/grupos')}}" class="icon-container col-2"><i class='iconos fas fa-users'></i></a>--}}
                   <i class='iconos fas fa-users'></i></a>
                   <br>
                    <a href="{{url('/grupos')}}"><h3>Grupos</h3></a>
                </div>
                <div class="icon-container">
                 
                   <i class='iconos fas fa-book-open'></i>
                   <br>
                   <a href="{{url('/horarios')}}"><h3>Horarios</h3></a>
                </div>
                
                <div class="icon-container">
                    {{-- <a href="{{ url('/clases') }}"> <span class="icon-container col-2"> <i class='iconos fas fa-chalkboard'></i> </a>  --}}
                     <i class='iconos fas fa-chalkboard'></i>
                     <br>
                     <a href="{{ url('/clases') }}"><h3>Clases</h3><a>
                </div>
                <div class="icon-container">
                  {{-- <a href="{{ url('/temarios')}}"><i class='iconos fas fa-book'></i></a>--}}
                    <i class='iconos fas fa-book'></i>
                    <br>
                    <a href="{{ url('/temarios')}}"><h3>Temario</h3></a>
                </div>
                     
            </div>  

        </div>
    </body>
</html>
