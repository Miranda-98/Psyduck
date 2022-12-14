<?php
    //require "../Model/Animal.php";
    //require "../Model/Adopcion.php";
    require "../Controller/Controlador_Animal.php";
    //require "../View/vistaAnimal.php";

    $tablaSeleccionada = $_POST['opcion'];



    if(isset($_POST['mostrarBoton'])){
        $x = new Controlador_Animal();
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
    }
    //  else {
    //     header('location: ../View/index.html');
    //     die();
    // }


?> 
