<?php
    require "../Model/Animal.php";
    require "../Model/Adopcion.php";

    $tablaSeleccionada = $_POST['opcion'];



    if ($tablaSeleccionada == 'animales') {
        function datosTablaAnimal()
        {
            $usuario = new Animal('pepe ', '', '', '', '', '', 'protectora_animales');
            $usuario->datosTablaAnimal();
        }
        datosTablaAnimal();
    } else if ($tablaSeleccionada == 'adopcion') {
        function datosTablaAdp()
        {
            $usuario = new Adopcion('', '', '', '', 'protectora_animales');
            $usuario->datosTablaAdopcion();
            
        }
        datosTablaAdp();

    } else {
        function datosTablaUser()
        {
            $usuario = new Usuario('','','','','','','protectora_animales');
            $usuario->datosTablaUsuario();
        }
        datosTablaUser();
    }
?> 
