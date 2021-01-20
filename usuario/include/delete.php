<?php
 require 'conexion.php';
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM publicaciones where id_p = $id";
    $result = mysqli_query($conexion, $query);
    if(!$result){
        die("fallo");
    }
    header("location: ../mpublicaciones.php");
}
?>