<!DOCTYPE html>
<html>
  <head>
    <title>Academia</title>
    <!-- Enlace para cargar bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/iconos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/secundarias.css')}}">
   <scipt src="{{asset('js/mAniadir.js')}}"></scipt>
    <scipt src="{{asset('js/prueba.js')}}"></scipt>
    @yield('css')
    <!-- Enlace para poner el icono identificativo-->
    <script src="https://kit.fontawesome.com/459debd0ca.js" crossorigin="anonymous"></script>
  </head>

  <body>
   <main class="py-4">
         @yield('content')
    </main>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    {{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
    @yield('js')
    </div>

  </body>
</html>