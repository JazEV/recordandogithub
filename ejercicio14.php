<?php
$nombreArchivo="archivo.txt";
$contenidoArchivo="QTALPASCUAL";
$archivoACrear=fopen($nombreArchivo,"w");
//para escribir el archivo
fwrite($archivoACrear,$contenidoArchivo);

fclose($archivoACrear);
?>