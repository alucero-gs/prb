
<?php
session_start();
session_destroy();
if(session_destroy()) // Destruye todas las sesiones
{
header("location: /prb/prb/index.html"); // Redireccionando a la pagina index.php
}
?>