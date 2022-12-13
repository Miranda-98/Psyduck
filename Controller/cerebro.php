<?php
    require "../Model/Animal.php";
    require "../Model/Adopcion.php";

    $tablaSeleccionada = $_POST['opcion'];



=======
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
>>>>>>> 82211a7f40b084b6e1a9c20e663e4180f4e25d75
    } else {
        function datosTablaUser()
        {
            $usuario = new Usuario('','','','','','','protectora_animales');
            $usuario->datosTablaUsuario();
        }
        datosTablaUser();
    }
<<<<<<< HEAD
?> 
=======
>>>>>>> 82211a7f40b084b6e1a9c20e663e4180f4e25d75
