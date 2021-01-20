<?php

include('bd.php');

if (isset($_POST['registrarmo'])) {
  $nombre = $_POST['txtnombre'];
  $apellidos = $_POST['txtapellidos'];
  $edad= $_POST['txtedad'];
  $email = $_POST['txtemail'];
  $username = $_POST['txtusername'];
  $contraseña= $_POST['txtcontra'];

  $query = "INSERT INTO moderadores(nombre, apellido,edad,email,username,contraseña) VALUES ('$nombre', '$apellidos','$edad','$email','$username','$contraseña')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: moderadores.php');

}

?>