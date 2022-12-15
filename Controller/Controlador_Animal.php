<?php

require "../Model/Adopcion.php";

class Controlador_Animal extends Animal
{

    private $animal;

    function __construct()
    {
        $this->animal = new Animal('pepe ', '', '', '', '', '', 'protectora_animales');
    }

    function tabla_Animales()
    {
        //UTILIZO LA FUNCION MOSTRAR DEL CRUD, PODEMOS BORRAR LA FUNCION DE LA CLASE ANIMALES?
        $pepo = $this->animal;
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
        $result = $pepo->datosTablaAnimal();
        foreach ($result as $x) {
            echo " <tr>
                <td>" . $x->id . "</td>",
            "<td>" . $x->nombre . "</td>",
            "<td>" . $x->especie . "</td>",
            "<td>" . $x->raza . "</td>",
            "<td>" . $x->genero . "</td>",
            "<td>" . $x->color . "</td>",
            "<td>" . $x->edad . "</td>",
            "<td><a href='../View/Crear,borrar,editar.php?id=$x->id & value=editar'>Editar</a></td>",
            "<td><a href='GGH?ID PARA PODER SABER A QUIEN BORRAR'>Borrar</a></td>";
            "</tr>";
        }
        echo "</table>";
    }

    function editar_Animales () {
        //UTILIZAR LA FUNCION ACTUALIZAR DE ANIMALES
        $pepo=$this->animal;
        $id=$_GET['id'];
        $result=$pepo->obtienedeid($id);
        print_r($result);
         
        $html = "<form  method='post'>";
        $html .="<fieldset><legend>Datos actuales del animal a modificar</legend>" ;
        $html .="<input type='hidden' name='hiddenId' value='" . $result[0]->id . "'><br><br/>";                    
        $html .= "Nombre: <input type='text' name='nombre' value='" . $result[0]->nombre . "'><br><br/>";
        $html .= "Especie:  <input type='text' name='especie' value='" . $result[0]->especie . "'><br><br/>";
        $html .= "Raza: <input  type='text' name='raza' value='" . $result[0]->raza . "'><br><br/>" ;
        $html .= "Genero: <input type='text' name='genero' value='" . $result[0]->genero . "'><br><br/>";
        $html .= "Color: <input type='text' name='color' value='" . $result[0]->color . "'><br><br/>";
        $html .= "Edad: <input type='text' name='edad' value='" . $result[0]->edad . "'><br><br/>";
        $html .= "<input type='submit' name='btnModificar' value='Modificar'>";
        $html .= "</fieldset></form>";
        echo $html;
        
                if(isset($_POST['btnModificar'])){
                    $pepe= new Animal($_POST['nombre'],$_POST['especie'],$_POST['raza'],$_POST['genero'],$_POST['color'],$_POST['edad'],'protectora_animales');
                    $pepe->__set('Id',$_POST['hiddenId']);
                    $pepe->actualizar();
                    header("location:../Controller/core.php?valor=animal&controlador=controlador");
                }

            }


    function crear_Animales(){
        echo "<form method='post' action=''>",
        "<label for='nombre'> Nombre </label>",
        "<input type='text' name='nombre' required/><br><br>",

        "<label for='especie'> Especie </label>",
        "<input type='text' name='especie' required/><br><br>",

        "<label for='raza'> Raza </label>",
        "<input type='text' name='raza' required/><br><br>",


        "<label for='genero'> Genero </label>",
        "<input type='text' name='genero' required/><br><br>",

        "<label for='nombre'> Color </label>",
        "<input type='text' name='color' required/><br><br>",

        "<label for='nombre'> Edad </label>",
        "<input type='number' min='1' name='edad' required/><br><br>",

        "<br><input type='submit' name='botonEnviar' value='Crear' /><br><br>",
        "<a href='../Controller/core.php?controlador=controlador&valor=animal'>Volver</a>",
        "</form>";

        if (isset($_POST['botonEnviar'])) {
            $this->animal->crear();
            header("location:../Controller/core.php?valor=animal&controlador=controlador");
        }
    }

        function borrar_Animales()
        {
            //UTILIZAR LA FUNCION BORRAR DE CRUD

        }
    
}
