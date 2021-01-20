<?php 

include("bd.php");


if(isset($_GET['id']))
{
   
    $id = $_GET['id'];
     $query = "DELETE FROM moderadores WHERE id_moderador = $id";
     $result = mysqli_query($conn, $query);
    

    if(!$result)
    {
        die("Imposible de Eliminar");
    }

    $_SESSION['message'] = "Eliminado";
    $_SESSION['message_type'] = "danger";

    header("Location: moderadores.php");
}

?>