@extends('public.template')

<form class="form-signin" action="/cadastro" method="post">
	{{ csrf_field() }}
	
  	<h2 class="form-signin-heading">RSS Google :: Cadastro</h2>
  
  <div>
  	<label for="inputName" class="sr-only">Nome</label>
	<input type="text" id="inputName" name="name" class="form-control" placeholder="Nome" required autofocus>	
  </div>

  <div>
  	<label for="inputEmail" class="sr-only">Email</label>
	<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>	
  </div>
  
  <div>
  	<label for="inputPassword" class="sr-only">Senha</label>
  	<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>	
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>

  <div class="row">
    <div class="col-md-12"><a href="/login">Já possui login ? Entre aqui</a></div>
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

</form>