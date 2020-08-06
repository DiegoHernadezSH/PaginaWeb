<meta charset="utf-8">
<?php
	include("conexion.php");
	if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	    isset($_POST['correo']) && !empty($_POST['correo']) &&
		isset($_POST['empresa']) && !empty($_POST['empresa']) &&
	    isset($_POST['mensaje']) && !empty($_POST['mensaje'])) 

	     {
		
		$con=mysqli_connect($host,$user,$pw,$db);
		mysqli_query($con,("INSERT INTO contacto(nombre,correo,empresa,mensaje) VALUES ('$_POST[nombre]','$_POST[correo]','$_POST[empresa]','$_POST[mensaje]')"));
		echo "datos ingresados";
	}else
		echo "error al insertar datos"
?>
	
	

