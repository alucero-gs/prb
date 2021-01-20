<?php

include('bd.php');

if (isset($_POST['mipublirr'])) {
  $nombre = $_POST['txttitulo'];
  $apellidos = $_POST['txtcomentario'];
  $edad= $_POST['txtfecha'];


  $query = "INSERT INTO mispubli(titulo, comentario,fecha) VALUES ('$nombre', '$apellidos','$edad')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: mispubli.php');

}

?>