@extends('layouts.app')

@section('content')
 <div class="register-photo">
 <div class="form-container">
 <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
 @csrf
 <h2 class="text-center"><strong>Inicia</strong>&nbsp;sesión.</h2>
			
			 <!---Inicio de Sesión--->
 <div class="form-group">
 <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
 @if ($errors->has('email'))
  <span class="invalid-feedback" role="alert">
  <strong>Emeil invalido verifiquelo e intente nuevamnete</strong>
  </span>
 @endif
 </div>
 <div class="form-group">
 <input id="password" type="password" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
 @if ($errors->has('password'))
  <span class="invalid-feedback" role="alert">
  <strong>Contraseña incorrecta </strong>
  </span>
 @endif
 </div>
 <div class="form-group">
 <button id= "btn_login" class="btn btn-primary btn-block" type="submit" style="background-color: #28a745;">
  Iniciar Sesión
 </button>
 </div>
 <a class="already" href="/register">
 No tienes cuenta? Crea una Aqui!
 </a>
 </form>
 </div>
 </div>
@endsection
