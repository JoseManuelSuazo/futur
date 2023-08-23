<html>
<head>
  <title>Registro cliente</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>


 <style>
body{
background-color:steelblue;
}
</style>
<font size="6"color="darkgoldenrod" face="Lucida Fax"> 
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  	<center><h1>Registrate</h1></center>
  	<form method="POST" action="registroform.php" >
	  <font size="4"color="darkred" face="Lucida Fax"> 
  	<div class="form-group">
	    <label for="pelicula">Pelicula Favorita</label>
	    <input type="text" name="pelicula" class="form-control" id="pelicula">
	</div>

	<div class="form-group">
	    <label for="Padres">Nombre de tus padres </label>
	    <input type="text" name="padres" class="form-control" id="padres">
	</div>

   <div class="form-group">
	    <label for="dir">Direccion </label>
	    <input type="text" name="dir" class="form-control" id="dir">
	</div>

	<div class="form-group">
	    <label for="tel">que marca de telefono tienes </label>
	    <input type="text" name="tel" class="form-control" id="tel">
	</div>

	<div class="form-group">
	    <label for="edad"> edad </label>
	    <input type="text" name="edad" class="form-control" id="edad">
	</div>
    
    <center><input type="submit" value="Enviar" class="btn btn-success" name="btn1"></center>

  </form>

  <?php
  	if(isset($_POST['btn1']))
  	{
  		include("abrir_conexion.php");

  		$pelicula=$_POST['pelicula'];
  		$padres=$_POST['padres'];
  		$dir=$_POST['dir'];
  		$tel=$_POST['tel'];
  		$edad=$_POST['edad'];

  		$conexion->query("INSERT INTO $tabla_db1  values ('$pelicula','$padres','$dir','$tel', '$edad')");

  		include("cerrar_conexion.php");
  		echo "Los datos se insertaron correctamente";
  	}
  ?>



  </div>
  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>