<?php
    if($_POST) {
        $boton=$_POST['valorBoton'];
        switch($boton) {
            case 1: echo "El botón es 1";
            break;
            case 2: echo "El botón es 2";
            break;
            case 3: echo "El botón es 3";
            break;
        }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio1.php" method="post">          
        <input type="submit" name="valorBoton" value="1">
        <input type="submit" name="valorBoton" value="2">
        <input type="submit" name="valorBoton" value="3">
    </form>
</body>
</html>

