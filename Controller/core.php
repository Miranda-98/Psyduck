<?php

require "Controlador_Usuario.php";

$controlador=($_GET['controlador']);


    if (empty($controlador)){

        header("location:../View/Inicio.html");

    }else{
        echo "<a href='../View/Inicio.html'>Inicio</a>";

        $valor=($_GET['valor']);
        
        if($valor=='animal'){
            echo "<br> <a href='../Controller/Controlador_Vista_Animal.php?value=crear'>Nueva Entrada</a>";
            $x = new Controlador_Animal();
            $x->tabla_Animales();

        }else if ($valor==='usuario'){
            echo "<br> <a href='Controlador_Vista_Usuario.php?value=crear'>Nueva Entrada</a>";
            $x = new Controlador_Usuario();
            $x->tabla_Usuarios();

        }else{            
            echo "<br> <a href='Controlador_Vista_Adopcion.php?value=crear'>Nueva Entrada</a>";
            $x = new Controlador_Adopcion();
            $x->tabla_Adopcion();
        }
    }

?> 