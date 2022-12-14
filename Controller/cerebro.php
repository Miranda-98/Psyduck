<?php
    require "../Model/Animal.php";
    require "../Model/Adopcion.php";
    //require "../View/vistaAnimal.php";

    $tablaSeleccionada = $_POST['opcion'];

    if(isset($_POST['mostrarBoton'])){
        $animal = new Animal('pepe ', '', '', '', '', '', 'protectora_animales');
        $x = new Controlador_Animal($animal);
        $x->animalesTabla();
        // if ($tablaSeleccionada == 'animales') {
        //     function datosTablaAnimal()
        //     {
        //         $usuario = new Animal('pepe ', '', '', '', '', '', 'protectora_animales');
        //         $usuario->datosTablaAnimal();
        //     }
        //     datosTablaAnimal();
        // } else if ($tablaSeleccionada == 'adopcion') {
        //     function datosTablaAdp()
        //     {
        //         $usuario = new Adopcion('', '', '', '', 'protectora_animales');
        //         $usuario->datosTablaAdopcion();
                
        //     }
        //     datosTablaAdp();
    
        // } else {
        //     function datosTablaUser()
        //     {
        //         $usuario = new Usuario('','','','','','','protectora_animales');
        //         $usuario->datosTablaUsuario();
        //     }
        //     datosTablaUser();
        // }
    } else {
        header('location: ../View/index.html');
        die();
    }


?> 
