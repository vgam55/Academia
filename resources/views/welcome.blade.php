<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Academia</title>

        <!-- Fonts -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
       <script src="https://kit.fontawesome.com/459debd0ca.js" crossorigin="anonymous"></script>
     <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
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
               <div id="marcoLogo" class="col-3"><i id="logo" class='fas fa-school' style='font-size:36px'></i>  
               </div>
                <div class="col-7">
                    <span>ACADEMIA</span>
                    <span>{{ Auth::user()->name}}</span>
                </div>
                <div class="col-4">
                    <button class="btn btn-primary" style='font-size:24px'>Salir <i class='fas fa-sign-in-alt' style='font-size:33px'></i></button>
                </div>
            </header>
             <div class="row">
                 <h1>Personal, Clientes, Administración</h1>
                 <hr>
             </div>
             <div class="row">
                <div class="col-2">  
                    <i class='fas fa-user-tie' style='font-size:36px'></i>
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
                    <i class='fas fa-chalkboard-teacher' style='font-size:36px'></i>
                    <h3>Profesores</h3>
                </div>
            </div>  

            <div class="row"> 
                <h1>Servicios</h1>
                <hr>
            </div>

             <div class="row">
                        
                            <div class="col-2">
                                <i class='fas fa-book-reader' style='font-size:36px'></i>
                                <h3>Cursos</h3>
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
                               <i class='fas fa-chalkboard' style='font-size:36px'></i>
                                <h3>Clases</h3>
                            </div>
                            <div class="col-2">
                                <i class='fas fa-list' style='font-size:36px'></i>
                                <h3>Temario</h3>
                            </div>
                     
                 </div>  

        </div>
    </body>
</html>
