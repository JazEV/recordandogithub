<?php
    class persona {
        public $nombre; //propiedades

        public function asignarNombre($nuevoNombre){ //acciones o metodos
            $this->nombre=$nuevoNombre;
        }
        public function imprimirNombre() {
            echo "Hola soy".$this->nombre;
        }
        public function mostrarEdad() {
            $this->edad=20;
            return $this->edad;
        }
    }
    class trabajador extends persona{
        public $puesto; //nueva propiedad
        public function presentarseComoTrabajador() {
            echo "Hola soy".$this->nombre." y soy un ".$this->puesto;
        }
    }
    $objTrabajador = new trabajador(); //instancia o creación de un objeto
    $objTrabajador->asignarNombre("Juan"); //llamando a un metodo
    $objTrabajador->puesto="Profesor";
    $objTrabajador->presentarseComoTrabajador();

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
    
</body>
</html>