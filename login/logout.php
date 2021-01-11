<?php
session_start();
session_destroy();
if(session_destroy()) // Destruye todas las sesiones
{
header("location: /prb/index.php"); // Redireccionando a la pagina index.php
}
?>