<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Academia</title>

        <!-- Enlace para cargar bootstrap-->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
       <link rel="stylesheet" href="{{ asset('css/iconos')}}">
       <!-- Enlace para crear los iconos-->
       <script src="https://kit.fontawesome.com/459debd0ca.js" crossorigin="anonymous"></script>
       
     <style>
        h1{
            font-size:2em;
        }
        header{
            height:50px;
           background: gold;
        }
        #marcoLogo{
            align-content: center;
            background: lightgreen;
            border-radius: 50%;
            height:50px;
            width:50px;
            display:table;
            vertical-align: center;
            align: center;
        }

         #logo {
            align-self: center;
         }
     </style>
    </head>
    <body>
       <div class="container-fluid" id="container">
            <header class="row">
               <div id="marcoLogo" class="col-3"><i id="logo" class=' iconos fas fa-school' style='font-size:36px'></i>  
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
                <div class="col-2">  
                    <a href="{{ url('/usuarios')}}"><i class='fas fa-user-tie' style='font-size:36px'></i></a>
                    <h3>Usuarios</h3>
                </div>
                              
                <div class="col-2">
                    <i class='fas fa-user-lock' style='font-size:36px'></i>
                    <h3>Roles</h3>
                </div>
                <div class="col-2">
                   <a href="{{url('/alumnos')}}" ><i class='fas fa-user-graduate' style='font-size:36px'></i></a>
                    <h3>Alumnos</h3>
                </div>
                <div class="col-2">
                    <a href="{{ url('/profesores') }}"><i class='fas fa-chalkboard-teacher' style='font-size:36px'></i></a>
                    <h3>Profesores</h3>
                </div>
            </div>  

            <div class="row"> 
                <h1>Servicios</h1>
                <hr>
            </div>

             <div class="row">
                <div class="col-2">
                    <a href=""> <h3> <i class='fas fa-book-reader' style='font-size:36px'></i> Cursos</h3></a>        
                </div>
                <div class="col-2">
                    <i class='fas fa-users' style='font-size:36px'></i>
                    <h3>Grupos</h3>
                </div>
                <div class="col-2">
                   <i class='fas fa-book-open' style='font-size:36px'></i>
                   <h3>Horarios</h3>
                </div>
                
                <div class="col-2">
                     <a href="{{ url('/clases') }}">  <i class='fas fa-chalkboard' style='font-size:36px'></i> </a>  
                     <h3>Clases<h3>
                </div>
                            <div class="col-2">
                                <i class='fas fa-list' style='font-size:36px'></i>
                                <h3>Temario</h3>
                            </div>
                     
                 </div>  

        </div>
    </body>
</html>
