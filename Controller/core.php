<?php

require "Controlador_Adopcion.php";

$controlador=($_GET['controlador']);


    if (empty($controlador)){
        header("location:../View/Inicio.html");
    }else{
        $valor=($_GET['valor']);
        if($valor=='animal'){
            $x = new Controlador_Animal();
            $x->tabla_Animales();
        }else if ($valor==='usuario'){
            $x = new Controlador_Usuario();
            $x->tabla_Usuarios();
        }else{
            $x = new Controlador_Adopcion();
            $x->tabla_Adopcion();
        }
    }

?> 
