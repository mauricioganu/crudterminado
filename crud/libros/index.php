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
<?php
include("conexion.php");

$resultados = mysqli_query($conn,'SELECT * FROM libros');


// Podemos ejecutar cualquier consulta SQL, por ejemplo para ingresar usuarios en una base de datos.
echo "<table border='2'>";
echo "<tr>";
echo "<th>Autor</th>";
echo "<th>Titulo</th>";
echo "<th>Precio</th>";
echo "<th>Genero</th>";
echo "<th>Cantidad</th>";
echo "</tr>";
while($fila = mysqli_fetch_array($resultados)){
	echo "<tr>";
	echo "<td>";
	echo $fila['autor'];
	echo "</td>";

	echo "<td>";
	echo $fila['titulo'];
	echo "</td>";

	echo "<td>";
	echo $fila['precio'];
	echo "</td>";

	echo "<td>";
	echo $fila['genero'];
	echo "</td>";

	echo "<td>";
	echo $fila['cantidad'];
	echo "</td>";








	echo "<td>";
	//Boton editar

    echo "<a href='FormEditar.php?titulo=".$fila['titulo']."'><img src='editar.png'></a>";
    echo "</td>";
	echo "</tr>";
}
echo "</table>";
 $conn->close();
?>

<HTML>
<head>
  <style>
body 
 {
  background-image: url("foto.jpg");
  background-size: cover;
 }

</style>
</head>
<Body>

</tr>
<Script>
function listado() {
var x = document.getElementById("autor").value;
document.cookie = "autor=" + x;
window.location.assign("listado.php")
}

</Script>


<br>
<table>
<tr>
<td>
<button type="button" onclick="document.getElementById('FormAlta').style.display='block'"><img src="Alta.PNG"></button>

<!--<a href="FormAlta.HTML"><img src="ALTA.PNG"></a> -->
</td>
<td>

<button type="button" onclick="document.getElementById('FormBaja').style.display='block'"><img src="BAJA.PNG"></button>
</td>
</tr>




<!-- Input y botón para autores -->
<tr>
<td>
<br><input id="autor">
</td>
<td>
<br><button type="button" onclick="listado()" >Listar Autor</button>
</td>
</tr>
</table>

<!-- Formulario debaja, que está oculto hasta que lo habilito con el botón -->

<style>
 body {background-color: powderblue; }
h1 {color:green;}
h2{color:yellow;}
h4 {color:red;}
br{color: green;}

select {color:purple;}
input {color:blue;}

</style>
<DIV id="FormBaja" style="display:none">
<h1>BAJA</h1>

<form action="Baja.php"  metod="get">
  <h2>Titulo:</h2><br>
  <input type="text" name="titulo" value="">
  <br>
  <input type="submit" value="Ejecutar BAJA">
</form> 
</DIV>

<DIV id="FormAlta" style="display:none">
<h2><em>Alta</em></h2>
<form action="Alta.php"  metod="get">
  Autor<br>
  <input type="text" name="autor" value="">
  <br>
  Titulo:<br>
  <input type="text" name="titulo" value="">
  <br><br>
  Precio:<br>
  <input type="text" name="precio" value="">
  <br><br>
  Genero:<br>
  <input type="text" name="genero" value="">
  <br><br>
  Cantidad:<br>
  <input type="text" name="cantidad" value="">
  <br><br>







  <input type="submit" value="ALTA">
</form> 

</DIV>
 <footer class="footer">
    <?php
        include "componentes/pie.php";
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
</Body>
</html>





<!-- <a href="FormBaja.HTML"><img src="baja.PNG"></a> -->





