<?php
/*Datos de conexion a la base de datos*/
$hostname = "localhost";
$user = "root";
$pass = "";
$name = "chismesprb";
 
$conn = mysqli_connect($hostname, $user, $pass, $name);
 
if(mysqli_connect_errno()){
	echo 'hubo un error al conectarse a la base de datos  : '.mysqli_connect_error();
}
?>