<?php
//transformar json a un formato más legible
$jsonContenido='[
    {"nombre":"Juan", "apellido":"pepito"},
    {"nombre":"Jose", "apellido":"pepito"}
]';

$resultado= json_decode($jsonContenido);
//print_r($resultado);

foreach($resultado as $persona) {
    echo ($persona->nombre)." ".($persona->apellido)."<br/>";
}
?>