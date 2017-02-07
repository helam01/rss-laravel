<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RSS Google</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">RSS Google</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="/">RSS</a></li>
            <li><a href="logout">Sair</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <p class="lead">Exibição de RSS do Google com o Laravel</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Veja aqui o código fonte no github</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-12">

        	@foreach( $rss->item as $item )
          	<div class="list-group">
			  <a href="{{ $item->link }}" class="list-group-item" target="__blank">
			    <h5 class="list-group-item-heading">{{ $item->title }}</h5>
			    {!! $item->description !!}
			  </a>
			</div>
			@endforeach

        </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; {!! date('Y') !!} Rss Google.</p>
      </footer>

    </div> <!-- /container -->
  </body>
</html>
