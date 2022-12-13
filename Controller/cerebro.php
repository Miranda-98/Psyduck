<?php
    require "../Model/Animal.php";
    require "../Model/Adopcion.php";

    $tablaSeleccionada = $_POST['opcion'];
    echo "p " . $tablaSeleccionada;

    function mostrarTabla($tabla = "animales")
    {
        $sql = "SELECT * FROM $tabla";
    }

    if ($tablaSeleccionada == 'animales') {
        function datosTablaAnimal()
        {
            $usuario = new Animal('', '', '', '', '', '', 'protectora_animales');
            echo $usuario->datosTablaAnimal();
        }
        datosTablaAnimal();
    } else if ($tablaSeleccionada == 'adopcion') {
        function datosTablaAdp()
        {
            $usuario = new Adopcion('', '', '', '', 'protectora_animales');
            echo $usuario->datosTablaAdopcion();
            
        }
        datosTablaAdp();
    } else {
        function datosTablaUser()
        {
            $usuario = new Usuario('','','','','','','protectora_animales');
            echo $usuario->datosTablaUsuario();
        }
        datosTablaUser();
    }
