<?php
//aprendiendo mysql
$servidor="localhost"; //127.0.0.1
$usuario="root";
$contrasenia="";

try{ //conecta con la bd y si eso pasa tira el echo
    $conexion=new PDO("mysql:host=$servidor;dbname=album",$usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg');";
    $conexion->exec($sql);
    echo "Conexión establecida";
}catch(PDOException $error){ //si no es posible conectar con la bd hace esto
    echo "Conexión errónea".$error;
}
?>