<?php
    require "../Model/Animal.php";
    $tablaSeleccionada = $_POST['opcion'];
    echo $tablaSeleccionada;

    function mostrarTabla($tabla = "animales"){
        $sql = "SELECT * FROM $tabla";
        
    }

    if($tablaSeleccionada == 'animales'){
        function datosTablaAni(){
            $animal = new Animal('','','','','','','protectora_animales');
           $animal.datosTablaAnimal();
        }
    } else if($tablaSeleccionada == 'adopcion') {
        function datosTablaAdopcion(){}
    } else {
        function datosTablaUsuario(){}
    }
?> 