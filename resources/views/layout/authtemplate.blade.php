<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ config("app.name", "Taal-net E-Library")}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <script src="../js/jquery.min.js"></script>
    {{-- <script src="../js/bootstrap.min.js"></script> --}}
    <script src="../js/bootstrap.bundle.min.js"></script>
    <style>
      /* Remove the navbar's default margin-bottom and rounded borders */ 
      .navbar {
        margin-bottom: 0;
        border-radius: 0;
      }
      
      /* Add a gray background color and some padding to the footer */
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }
    </style>
  </head>

  <body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="\">Taal-Net Group</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="https://taalct.co.za"><i class="fa fa-globe"> </i> Website</a></li>
          <li><a href="https://elearning.taalct.co.za"><i class="fa fa-graduation-cap"> </i> E-Learning</a></li>
          <li><a href="https://facebook.com"><i class="fa fa-facebook"> </i> Facebook</a></li>
          <li><a href="https://facebook.com"><i class="fa fa-instagram"> </i> Instagram</a></li>
          <li><a href="https://facebook.com"><i class="fa fa-instagram"> </i> Instagram</a></li>
          <li><a href="/contactus"><i class="fa fa-envelope"> </i> Contact Us </a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          {{-- <li><a href="/login/"><span class="fa fa-user"></span> Login</a></li> --}}
              
        
          <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"> <span class="fa fa-child "></span>
            Logout
        </a>
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form></li>
        </ul>
      </div>
    </div>
  </nav>

  <div>

    @yield('top_nav')
    
    
    @yield('main_sec') 

  <footer class="container-fluid text-center">
    <p>
      <a class="btn btn-label align-center">Taal-Net Group Of Schools <i class="fa fa-heart text-danger"></i>  Copyright @ {{ date('Y') }}</a>
    </p>
  </footer>

  </body>
</html>