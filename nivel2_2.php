<?php

//sobreescribir un metodo mágico

class MiClase {
    private $mensaje;  

    public function __construct($mensaje) {
        $this->mensaje = $mensaje; 
    }

    public function __toString() {
        return "El mensaje es: " . $this->mensaje;  
    }
}

$objeto = new MiClase("Hola, este es un mensaje personalizado.");
echo $objeto;


?>