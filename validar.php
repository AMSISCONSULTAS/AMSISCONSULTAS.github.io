<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conexion=mysqli_connect("localhost","root","","amsis_consultas");
$consulta="SELECT * FROM prueba WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
	header("location:vision.html");
}
else {
	echo "Error en la autenticación";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
