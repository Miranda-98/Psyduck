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
            "<td><a href='GDHDF?ID PARA PODER ENSEÑAR LOS DATOS'>Editar</a></td>",
            "<td><a href='GGH?ID PARA PODER SABER A QUIEN BORRAR'>Borrar</a></td>";
            "</tr>";
        }
        echo "</table>";
    }

    function crearAnimales()
    {
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
            echo "Animal creado";
        }
    }

    function editar_Animales()
    {
        //UTILIZAR LA FUNCION ACTUALIZAR DE ANIMALES
        $pepo = $this->animal;
        $id = $_GET['id'];
        $result = $pepo->obtienedeid($id);
        print_r($result);
        //             foreach($result as $x) {
        //                 echo " <tr>
        //                 <td>".$x->id."</td>", 
        //                 "<td>".$x->nombre."</td>", 
        //                 "<td>".$x->especie."</td>", 
        //                 "<td>".$x->raza."</td>", 
        //                 "<td>".$x->genero."</td>", 
        //                 "<td>".$x->color."</td>", 
        //                 "<td>".$x->edad."</td>",

        // $html = "";

        // $html = "<form action='' method='post'>";
        // $html .="<fieldset><legend>Datos actuales del animal a modificar</legend>" ;
        // $html .="<input type='hidden' name='hiddenCLIENTE' value='" . $reg['CLIENTE_ID'] . "'><br><br/>                    " ;
        // $html .= "Nombre: <input type='text' name='nombre' value='" . $reg['nombre'] . "'><br><br/>";
        // $html .= "Direccion:  <input type='text' name='Direccion' value='" . $reg['Direccion'] . "'><br><br/>";
        // $html .= "Ciudad: <input  type='text' name='Ciudad' value='" . $reg['Ciudad'] . "'><br><br/>" ;
        // $html .= "Estado: <input type='text' name='Estado' value='" . $reg['Estado'] . "'><br><br/>";
        // $html .= "CodigoPostal: <input type='text' name='CodigoPostal' value='" . $reg['CodigoPostal'] . "'><br><br/>";
        // $html .= "CodigoDeArea: <input type='text' name='CodigoDeArea' value='" . $reg['CodigoDeArea'] . "'><br><br/>";
        // $html .= "Telefono: <input type='text' name='Telefono' value='" . $reg['Telefono'] . "'><br><br/>";
        // $html .= "Vendedor: <input type='text' name='Vendedor_ID' value='" . $reg['Vendedor_ID'] . "'><br><br/>";
        // $html .= "Limite de Credito: <input type='text' name='Limite_De_Credito' value='" . $reg['Limite_De_Credito'] . "'><br><br/>";
        // $html .= "Comentarios: <input type='text' name='Comentarios' value='" . $reg['Comentarios'] . "'><br><br/>";
        // $html .= "<input type='submit' name='btnModificar' value='Modificar'>";
        // $html .= "</fieldset></form>";

        // <td>ID</td>
        // <td>NOMBRE</td>
        // <td>ESPECIE</td>
        // <td>RAZA</td>
        // <td>GÉNERO</td>
        // <td>COLOR</td>
        // <td>EDAD</td>
        // echo $html;

        // }

        function borrar_Animales()
        {
            //UTILIZAR LA FUNCION BORRAR DE CRUD

        }
    }
}
