<?php

require "../Model/Adopcion.php";

class Controlador_Animal extends Animal{

    private $animal;

    function __construct (){
        $this->animal=new Animal('pepe ', '', '', '', '', '', 'protectora_animales');
    }

    function tabla_Animales () {
            //UTILIZO LA FUNCION MOSTRAR DEL CRUD, PODEMOS BORRAR LA FUNCION DE LA CLASE ANIMALES?
            $pepo=$this->animal;
            echo "<table border=solid black 1px>
            <th colspan=11>TABLA ANIMALES</th>
                        <tr>
                            <td>ID</td>
                            <td>NOMBRE</td>
                            <td>ESPECIE</td>
                            <td>RAZA</td>
                            <td>GÉNERO</td>
                            <td>COLOR</td>
                            <td>EDAD</td>
                        </tr>";
            $result=$pepo->obtieneTodos();
            foreach($result as $x) {
                echo " <tr>
                <td>".$x->id."</td>", 
                "<td>".$x->nombre."</td>", 
                "<td>".$x->especie."</td>", 
                "<td>".$x->raza."</td>", 
                "<td>".$x->genero."</td>", 
                "<td>".$x->color."</td>", 
                "<td>".$x->edad."</td>",
                "<td><a href='GDHDF'>Editar</a></td>",
                "<td><a href='GGH'>Borrar</a></td>";
            "</tr>";      
        }
        echo "</table>";

    }
}
