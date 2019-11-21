<html>
<head>
	
	<style>
		body
		{background-image: url("foto.jpg");
         background-size: cover;
	     }

	</style>
</head>
</html>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../icono.ico">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/floating-labels.css" rel="stylesheet">

  </head>

  <body>

    <header>
    <?php
       // include "componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
         
       
       <h1>REGISTRO BORRADO CON EXITO!!</h1>
        <img src="https://maestrofinanciero.com/wp-content/uploads/2012/07/exitosos.jpg">
        <br>
        
          
          <a href="index.php"><h2>VOLVER</h2></a>

    </main>
    <?php
include("conexion.php");

if($_GET) {
    $f_titulo = $_GET['titulo'];
         
    $sql = "DELETE FROM libros WHERE titulo='$f_titulo'";
    if($conn->query($sql) === TRUE) {
       // echo "<p>Registro borrado</p>";
       // echo "<a href='index.php'><button type='button'>VOLVER</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conn->connect_error;
    }
 
    $conn->close();
}
?>
      
    <footer class="footer">
    <?php
        //include "componentes/pie.php";
    ?>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cAlumnorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
