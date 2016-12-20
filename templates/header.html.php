<html>
    <head>
        <title>Przykład wykorzystania wzorca MVC</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Latest compiled and minified JavaScript -->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- css -->
        <link href="http://{$smarty.server.HTTP_HOST}{$subdir}css/bootstrap.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    </head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Jakieś logo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle glyphicon glyphicon-folder-open" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Kategoria<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Categories" class="glyphicon glyphicon-folder-open"> Kategoria</a></li>
              <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Categories/add" class="glyphicon glyphicon-plus"> Dodaj kategorię</a></li>
            </ul>
          </li>

          <li class="dropdown">
              <a href="#" class="dropdown-toggle glyphicon glyphicon glyphicon-book" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Ksiazka<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Ksiazka" class="glyphicon glyphicon glyphicon-book"> Ksiazka</a></li>
                <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Ksiazka/add" class="glyphicon glyphicon-plus"> Dodaj ksiazke</a></li>
              </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Autor<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Autor" class="glyphicon glyphicon-user"> Autor</a></li>
                  <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Autor/add" class="glyphicon glyphicon-plus"> Dodaj autora</a></li>
                </ul>
              </li>

              <li class="dropdown">
                  <a href="#" class="dropdown-toggle glyphicon glyphicon-cog" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Baza<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Baza" class="glyphicon glyphicon-cog"> Instaluj bazę</a></li>
                  </ul>
                </li>
      </ul>

      <form class="navbar-form navbar-right" action="http://{$smarty.server.HTTP_HOST}{$subdir}Ksiazka/year" method="post">
        <div class="form-group">
          <input type="number" class="form-control" placeholder="Rok wydania ksiazki" id="rok" name="rok">
        </div>
        <button type="submit" class="btn btn-default">Szukaj</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<body>
<div id="wrap">
  <div class="row center-block">
    <div class="col-md-12">
