
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <!-- link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"-->
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{url('materialize/css/materialize.min.css')}}"  media="screen,projection"/>
      @yield('header')


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <nav>
    <div class="nav-wrapper">

    <div class="container">

      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
       @include('menu')
      </ul>
      <ul class="side-nav" id="mobile-demo">
       @include('menu')
      </ul>
    </div>
    </div>
  </nav>
 
  <div class="container">
  @yield('content')
  </div>
  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="{{url('materialize/js/jquery-3.1.0.min.js')}}"></script>
      <script type="text/javascript" src="{{url('materialize/js/materialize.min.js')}}">
      <script type="text/javascript">$(document) .ready(function(){
        $(".button-collapse").sideNav();});  
      </script>
    </body>
  </html>
