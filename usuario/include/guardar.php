<?php
 require 'conexion.php';
 if(isset($_POST['guardar'])){
    $id_p = $_POST['id_p'];
    $usuario = $_POST['usuario'];
    $comentario = $_POST['comentario'];
    $fecha = $_POST['fecha'];
    $query = "INSERT INTO comentarios(id_p, usuario, comentario, fecha) VALUES ('$id_p', '$usuario', '$comentario', '$fecha')";
    $result = mysqli_query($conexion, $query);
    if(!$result){
        die("fallo");
    }
    header("location: ../pprincipal.php");
    
}
?>