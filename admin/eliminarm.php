<?php 

include("bd.php");


if(isset($_GET['id']))
{
   
    $id = $_GET['id'];
     $query = "DELETE FROM mispubli WHERE id_mispubli = $id";
     $result = mysqli_query($conn, $query);
    

    if(!$result)
    {
        die("Imposible de Eliminar");
    }

    $_SESSION['message'] = "Eliminado";
    $_SESSION['message_type'] = "danger";

    header("Location: mispubli.php");
}

?>