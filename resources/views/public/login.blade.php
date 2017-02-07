@extends('public.template')

<form class="form-signin" action="/login" method="post">
  {{ csrf_field() }}

  <h2 class="form-signin-heading">RSS Google :: Login</h2>
  <label for="inputEmail" class="sr-only">Email</label>
  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
  <label for="inputPassword" class="sr-only">Senha</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

  <div class="row">
    <div class="col-md-12"><a href="/cadastro">Não possui login ? Cadastre aqui</a></div>
  </div>


  @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif


  @if ( session()->has('alert') )
    <div class="alert alert-{{ session()->get('alert')['type'] }}">
        <ul>
            <li>{{ session()->get('alert')['message'] }}</li>
        </ul>
    </div>
  @endif

</form>