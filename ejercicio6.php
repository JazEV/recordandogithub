<?php
//aprendiendo a hacer una sesión para que se mantengan los datos mientras el usuario usa la página
session_start();
$_SESSION["usuario"]="juanpepito";
$_SESSION["status"]="logueado";
echo "Sesión iniciada";
echo "Usuario: ".$_SESSION["usuario"]."status: ".$_SESSION["status"];
?>