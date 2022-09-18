<!-- AQUI ES DONDE CERRAMOS LA APP "CERRAR SESION" -->
<?php
session_start();
session_destroy();
header('Location:../index.php');
?>