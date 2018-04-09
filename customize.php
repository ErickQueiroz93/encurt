
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Encurte sua URL</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" action="gerador.php" method="post">
      <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Encurte sua URL gr&aacute;tis</h1>
        <p>De forma rápida e simples</p>
      </div>

      <div class="form-label-group">
        <input type="url" id="url" name="url" class="form-control" placeholder="URl" required autofocus>
        <label for="url">URL</label>
      </div>

      <div class="form-label-group">
        <input type="number" id="qtde" name="qtde" class="form-control" placeholder="Quantos link vc quer?" value="1" required>
        <label for="inputPassword">Quantos link vc quer?</label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Encurtar</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2018</p>
    </form>
  </body>
</html>