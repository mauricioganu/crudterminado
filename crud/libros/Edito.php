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
       include "componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <?php
include("conexion.php");

if($_GET) {
    $f_titulo = $_COOKIE['titulo'];
    $f_autor = $_GET['autor'];
     $f_precio = $_GET['precio'];
      $f_cantidad = $_GET['cantidad'];
       $f_genero = $_GET['genero'];
       
// Query de actualización de la tabla         
    $sql = "UPDATE libros SET autor='$f_autor', precio='$f_precio', cantidad='$f_cantidad',genero='$f_genero' WHERE titulo='$f_titulo'";
    if($conn->query($sql) === TRUE) {
      //  echo "<p>Registro ACTUALIZADO</p>";
       // echo "<a href='index.php'><button type='button'>VOLVER</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conn->connect_error;
    }
    
    $conn->close();
}
?>
         
       
       <h1>REGISTRO ACTUALIZADO CON EXITO!!</h1>
        <img src="https://maestrofinanciero.com/wp-content/uploads/2012/07/exitosos.jpg">
        <br>
        
          <a href="index.php"><h2>VOLVER</h2></a>

    </main>
      
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

