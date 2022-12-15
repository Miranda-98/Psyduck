<?php

require "Controlador_Animal.php";

class Controlador_Usuario extends Usuario{

    private $usuario;

    function __construct (){
        $this->usuario=new Usuario('pepe ', '', '', '', '', '','protectora_animales');
    }

    function tabla_Usuarios () {
            //UTILIZO LA FUNCION MOSTRAR DEL CRUD, PODEMOS BORRAR LA FUNCION DE LA CLASE USUARIOS?
            $pepo=$this->usuario;
            echo "<table border=solid black 1px>
            <th colspan=11>TABLA USUARIOS</th>
                        <tr>
                        <td>ID</td>
                        <td>NOMBRE</td>
                        <td>APELLIDO</td>
                        <td>SEXO</td>
                        <td>DIRECCION</td>
                        <td>TELEFONO</td>
                        </tr>";
            $result=$pepo->datosTablaUsuario();
            foreach($result as $x) {
                echo " <tr>
                <td>".$x->id."</td>", 
                "<td>".$x->nombre."</td>", 
                "<td>".$x->apellido."</td>", 
                "<td>".$x->sexo."</td>", 
                "<td>".$x->direccion."</td>", 
                "<td>".$x->telefono."</td>", 
               
                "<td><a href='GDHDF?ID PARA PODER ENSEÑAR LOS DATOS'>Editar</a></td>",
                "<td><a href='GGH?ID PARA PODER SABER A QUIEN BORRAR'>Borrar</a></td>";
            "</tr>";      
        }
        echo "</table>";

    }

    function editar_usuarios() {
//UTILIZAR LA FUNCION ACTUALIZAR DE USUARIOS
    }

    function borrar_usuarios() {
//UTILIZAR LA FUNCION BORRAR DE CRUD

    }
}