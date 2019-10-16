<!doctype html>
<html lang="{{ app()->getLocale() }}">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="/css/app.css">
 <link rel="stylesheet" href="/assets/css/Ccs-PaginaPrincipal.css">
 <link rel="stylesheet" href="/assets/css/Acabados-HighClean.css">
 <link rel="stylesheet" href="/assets/css/Pie-de-Pagina.css">
 </head>
 <body>
 <div>
 <div class="ccspaginaprincipal">
 <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
			
 <div class="container">
			 <img src="./img/pages.jpg" alt="" class="brand-image img-box">
			 <a class="navbar-brand" href="#">EcoBook</a><button 
			 data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
			 <span 
			 class="sr-only">Toggle navigation</span><span
			 class="navbar-toggler-icon"></span></button>
 <div class="collapse navbar-collapse"
 id="navcol-1">
 <ul class="nav navbar-nav">
 <li class="nav-item" role="presentation">

 </li>
 </ul>
 <form class="form-inline mr-auto" target="_self">
 
 </form>
				 <span class="nav-item navbar-text" role="presentation">
 <a class="login" href="{{ route('login')}}">
 Sobre Nosotros
 </a>
 </span>
							 <span class="nav-item navbar-text" role="presentation">
 <a class="login" href="{{ route('login')}}">
 Contactanos
 </a>
 </span>
 @if (Route::has('login'))
 @auth
 <span class="nav-item navbar-text" role="presentation">
 <a class="btn btn-light action-button" role="button" href="{{ url('/dashboard') }}">
 Accede
 </a>
 </span>
 @else
 <span class="nav-item navbar-text" role="presentation">
 <a class="login" href="{{ route('login')}}">
 Iniciar Sesión
 </a>
 </span>
 <span class="nav-item navbar-text" role="presentation">
 <a class="login" role="button" href="{{ route('register') }}">
 Regístrate
 </a>
 </span>
 @endauth
 @endif
 </div>
 </div>
 </nav>

 <div class="container hero">		
			 <h1>Ecobook Cuida tu Ambiente.</h1>
			 	<img src="./img/pages.jpg" width="600" height="300" /> 
 </div>
 </div>
 </div>
 </div>
 
 <div class="highlight-clean">
 <div class="container">
 <div class="intro">
 <h2 class="text-center"></h2>
 <p class="text-center">. </p>
 </div>
			 <h1>Ecobook Cuida tu Ambiente.</h1>
 <div class="buttons"
 <button class="btn btn-light" type="button">
 LeerMas.
 </button>
 </div>
 </div>
 </div>
 <div class="footer-dark">
 <footer>
 <div class="container">
 <div class="row">
 <div class="col-sm-6 col-md-3 item">
 </div>
 <p class="copyright">EcoBook © 2019</p>
 </div>
 </footer>
 </div>
 </body>
</html>
