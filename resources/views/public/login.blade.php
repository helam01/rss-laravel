@extends('public.template')

<form class="form-signin">
  <h2 class="form-signin-heading">RSS Google :: Login</h2>
  <label for="inputEmail" class="sr-only">Email</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
  <label for="inputPassword" class="sr-only">Senha</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

  <div class="row">
    <div class="col-md-12"><a href="/cadastro">Não possui login ? Cadastre aqui</a></div>
  </div>

</form>