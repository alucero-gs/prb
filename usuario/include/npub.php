<?php
 require 'conexion.php';
 if(isset($_POST['guardar'])){
    $autor = $_POST['autor'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $fecha = $_POST['fecha'];
    $query = "INSERT INTO publicaciones(autor, titulo, contenido, fecha) VALUES ('$autor', '$titulo', '$contenido', '$fecha')";
    $result = mysqli_query($conexion, $query);
    if(!$result){
        die("fallo");
    }
    header("location: ../mpublicaciones.php");
    
}
?>