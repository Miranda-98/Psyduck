<?php

require "Controlador_Usuario.php";

class Controlador_Adopcion extends Adopcion{

    private $adopcion;

    function __construct (){
        $this->adopcion=new adopcion('pepe ', '', '', '','protectora_animales');
    }

    function tabla_Adopcion () {
    //UTILIZO LA FUNCION MOSTRAR DEL CRUD, PODEMOS BORRAR LA FUNCION DE LA CLASE ADOPCION?
            $pepo=$this->adopcion;
            echo "<table border=solid black 1px>
            <th colspan=11>TABLA ADOPCIONES</th>
                <tr>
                    <td>ID</td>
                    <td>ID ANIMAL</td>
                    <td>ID USUARIO</td>
                    <td>FECHA</td>
                    <td>RAZON</td>
                </tr>"; 
            $result=$pepo->datosTablaAdopcion();
            foreach($result as $x) {
                echo " <tr>
                <td>".$x->id."</td>", 
                "<td>".$x->idAnimal."</td>", 
                "<td>".$x->idUsuario."</td>", 
                "<td>".$x->fecha."</td>", 
                "<td>".$x->razon."</td>", 
                "<td><a href='GDHDF?ID PARA PODER ENSEÑAR LOS DATOS'>Editar</a></td>",
                "<td><a href='GGH??ID PARA PODER SABER A QUIEN BORRAR'>Borrar</a></td>";
            "</tr>";      
        }
        echo "</table>";

    }

    function editar_Adopcion () {
//UTILIZAR LA FUNCION ACTUALIZAR DE ADOPCION

    }

    function borrar_Adopcion () {
//UTILIZAR LA FUNCION BORRAR DE CRUD

    }
}