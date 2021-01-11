<?php 

require "conexion.php";
session_start();
$usuario =$_POST['email'];
$password=$_POST['pwd'];
$admin = 'admin@gmail.com';

$q="SELECT COUNT(*) as contar from login WHERE email='$usuario' and password='$password'";
$consulta = mysqli_query($con,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username']=$usuario;
    if($usuario ==$admin){
        header("location: ../admin/admin.php");
    }
    else if($usuario==$empleado){
        header("location: ../usuario/usuario.php");
    }
    
}
else{
    header("location: ../index.php");
}


?>