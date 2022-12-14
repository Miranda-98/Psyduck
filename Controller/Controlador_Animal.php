<?php
require "../Model/Animal.php";

class Controlador_Animal extends Animal{

    private $animal;

    function __construct ($animal){
        $this->animal=$animal;
    }

    function mostrar_Animales(){
        // echo "<pre>"; 
        // print_r($this->animal->obtieneTodos());
        // echo "</pre>";
        $x = $this->animal->obtieneTodos();
        
        return $x;
    }
    function animalesTabla(){
        //Por parámetro debería ir el value de controlador?????
        $animal = new Animal('pepe ', '', '', '', '', '', 'protectora_animales');
        $objControlador = new Controlador_Animal($animal);
        $obj = $objControlador->mostrar_Animales();

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
         foreach($obj as $x){
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
    // $f = new Animal('pepe ', '', '', '', '', '', 'protectora_animales');
    // $firulais = new Controlador_Animal($f);
    // $firulais->mostrar_Animales();
    // $firulais->animalesTabla();
