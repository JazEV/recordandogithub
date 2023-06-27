<?php
$txtNombre = "";
$rdgLenguaje= "";
$chphp= "";
$chcss= "";
$chhtml= "";
$serie= "";
$txtComentario = "";
if($_POST){
    $txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    //"si hay info en este txt asignaselo, sino dejalo vacio" if ternario
    $rdgLenguaje=(isset($_POST['rdgLenguaje']))?$_POST['rdgLenguaje']:"";
    $chphp=(isset($_POST['chphp'])=="si")?"checked":"";
    $chcss=(isset($_POST['chcss'])=="si")?"checked":"";
    $chhtml=(isset($_POST['chhtml'])=="si")?"checked":"";
    $serie=(isset($_POST['serie']))?$_POST['serie']:"";
    $txtComentario=(isset($_POST['txtComentario']))?$_POST['txtComentario']:"";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($_POST) { ?>
        <strong>HOLA</strong>: <?php echo $txtNombre; ?>
        <br/>
        <strong>El lenguaje que te gusta es: </strong> <?php echo $rdgLenguaje; ?> </strong> <br/>
        <strong>El lenguaje que estás aprendiendo es: </strong> <br/>
        <?php echo ($chphp=="checked")?"PHP":""; ?>
        <?php echo ($chcss=="checked")?"CSS":""; ?>
        <?php echo ($chhtml=="checked")?"HTML":""; ?>
        <br/>
        <strong>Tu mensaje es: <?php echo $txtComentario ?> </strong>
    <?php } ?>
    <form action="ejercicio7.php" method="post">
        Nombre: <br/>
        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
        <br/>
        ¿Te gusta? <br/>
        <br/> php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":""; ?> name="rdgLenguaje" value="php" id=""> <br/>
        <br/> css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":""; ?> name="rdgLenguaje" value="css" id=""> <br/>
        <br/> html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":""; ?> name="rdgLenguaje" value="html" id=""> <br/>
        Estás aprendiendo... <br/>
        <br/> php: <input type="checkbox" <?php echo $chphp; ?> name="chphp" value="si" id="">
        <br/> css: <input type="checkbox" <?php echo $chcss; ?> name="chcss" value="si" id="">
        <br/> html: <input type="checkbox" <?php echo $chhtml; ?> name="chhtml" value="si" id="">
        <br/>
        ¿Qué serie te gusta? <br/>
        <select name="serie" id="">
            <option value="nada" <?php echo ($serie=="nada")?"selected":""; ?> >Ninguna</option>
            <option value="bcs" <?php echo ($serie=="bcs")?"selected":""; ?> >Better Call Saul</option>
            <option value="lg" <?php echo ($serie=="lg")?"selected":""; ?> >La Gloria</option>
            <option value="to" <?php echo ($serie=="to")?"selected":""; ?> >The Oficce</option>
        </select>
        <br/>
        Hace tu descargo acá <br/>
        <textarea name="txtComentario" id="" cols="30" rows="10"></textarea>
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>