<?php
$archivo="contenido.txt";
$archivoAbierto=fopen($archivo,"r");
//para leer el archivo
$contenido=fread($archivoAbierto,filesize($archivo));
echo $contenido;
?>