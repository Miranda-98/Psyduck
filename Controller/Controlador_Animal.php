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

        if (isset($_POST['botonEnviar'])){
            $this->animal->crear();
            echo "Animal creado";
        }
    }

    function editar_Animales()
    {
        //UTILIZAR LA FUNCION ACTUALIZAR DE ANIMALES

    }

    function borrar_Animales()
    {
        //UTILIZAR LA FUNCION BORRAR DE CRUD

    }
}
