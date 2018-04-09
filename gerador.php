
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Links encurtados</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Encurtador</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="customize.php">Encurtar mais <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <?php 
        if(isset($_POST['url']))
        {
            try 
            {
                $conn = new PDO('mysql:host=localhost;dbname=encurt', "root", "developerphp");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } 
            catch(PDOException $e) 
            {
                echo 'ERROR: ' . $e->getMessage();
            }

            for($i=0; $i <= $_POST['qtde']; $i++) 
            { 
                $hash = uniqid();

                $sql = "SELECT count(*) FROM links WHERE hash = '".$hash."' "; 
                $result = $conn->prepare($sql); 
                $result->execute(); 
                $number_of_rows = $result->fetchColumn();   
                if($number_of_rows == 0)
                {
                    
                }
                else
                {
                    $i--;
                }
            } 

        }
      ?>
      <h1 class="mt-5">Seus link foram encurtados com sucesso.</h1>
      <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">&copy; 2018</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
