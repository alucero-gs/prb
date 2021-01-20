<?php

include('bd.php');

if (isset($_POST['registrarmo'])) {
  $nombre = $_POST['txtnombre'];
  $apellidos = $_POST['txtapellidos'];
  $edad= $_POST['txtedad'];
  $email = $_POST['txtemail'];
  $username = $_POST['txtusername'];
  $contraseña= $_POST['txtcontra'];
$num=2;
  $query = "INSERT INTO moderadores(nombre, apellido,edad,email,username,contraseña,tipo_usu) VALUES ('$nombre', '$apellidos','$edad','$email','$username','$contraseña','$num')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: moderadores.php');

}

?>