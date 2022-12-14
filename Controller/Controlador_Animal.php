<?php
require "../Model/Animal.php";

class Controlador_Animal extends Animal{

    private $animal;

    function __construct ($animal){
        $this->animal=new Animal('', '', '', '', '', '', 'protectora_animales');
    }

    function mostrar_Animales(){
        // echo "<pre>"; 
        // print_r($this->animal->obtieneTodos());
        // echo "</pre>";
        $x = $this->animal->obtieneTodos();
        
        return $x;
    }
    function animalesTabla(){
        $animal = new Animal('pepe ', '', '', '', '', '', 'protectora_animales');
        $objControlador = new Controlador_Animal($animal);
        $obj = $objControlador->mostrar_Animales();

        echo "<table border=solid black 1px>
        <th colspan=11>TABLA CLIENTE</th>
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
                    "<td>".$x->edad."</td>";
    }
    }
    
}
    $f = new Animal('pepe ', '', '', '', '', '', 'protectora_animales');
    $firulais = new Controlador_Animal($f);
    $firulais->mostrar_Animales();
?>