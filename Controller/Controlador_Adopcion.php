<?php

require "../Model/Adopcion.php";

class Controlador_Adopcion extends Adopcion{

    private $adopcion;

    function __construct (){
        $this->adopcion=new adopcion('', '', '', '', 'protectora_animales');
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
                "<td><a href='../View/CRUD_ADOPCION.php ? id=$x->id & value=editar'>Editar</a></td>",
                "<td><a href='GGH??ID PARA PODER SABER A QUIEN BORRAR'>Borrar</a></td>";
            "</tr>";      
        }
        echo "</table>";

    }

    function editar_Adopcion () {
//UTILIZAR LA FUNCION ACTUALIZAR DE ADOPCION
        $pepo=$this->adopcion;
        $id=$_GET['id'];
        $result=$pepo->obtienedeid($id);
        print_r($result);
         
        $html = "<form  method='post'>";
        $html .="<fieldset><legend>Datos actuales de adopción a modificar</legend>" ;
        $html .="<input type='hidden' name='hiddenId' value='" . $result[0]->id . "'><br><br/>"; 
        $html .= "ID ANIMAL:  <input type='text' name='idAnimal' value='" . $result[0]->idAnimal . "'><br><br/>";
        $html .= "ID USUARIO: <input  type='text' name='idUsuario' value='" . $result[0]->idUsuario . "'><br><br/>" ;
        $html .= "FECHA: <input type='text' name='fecha' value='" . $result[0]->fecha . "'><br><br/>";
        $html .= "RAZON: <input type='text' name='razon' value='" . $result[0]->razon . "'><br><br/>";
        $html .= "<input type='submit' name='btnModificar' value='Modificar'>";
        $html .= "</fieldset></form>";
        echo $html;
        
                if(isset($_POST['btnModificar'])){
                    $pepe= new Adopcion($_POST['idAnimal'],$_POST['idUsuario'],$_POST['fecha'],$_POST['razon'],'protectora_animales');
                    $pepe->__set('Id',$_POST['hiddenId']);
                    $pepe->actualizar();
                    header("location:../Controller/core.php?valor=adopcion&controlador=controlador");
                }

    }

    function crear_Adopcion()
    {
        echo "<form method='POSTFNU' action=''>",
        "<label for='nombre'> ID </label>",
        "<input type='text' name='id' required/><br><br>",

        "<label for='especie'> ID ANIMAL </label>",
        "<input type='text' name='idAnimal' required/><br><br>",

        "<label for='raza'> ID USUARIO </label>",
        "<input type='text' name='idUsuario' required/><br><br>",


        "<label for='genero'> FECHA </label>",
        "<input type='text' name='fecha' required/><br><br>",

        "<label for='nombre'> USUARIO </label>",
        "<input type='text' name='razon' required/><br><br>",


        "<br><input type='submit' name='botonEnviar' value='crear' /><br><br>",
        "<a href='../Controller/core.php?controlador=controlador&valor=adopcion'>Volver</a>",
        "</form>";

        if (isset($_POST['botonEnviar'])) {
            $this->adopcion->crear();
            header("location:../Controller/core.php?valor=adopcion&controlador=controlador");
        }
    }

    function borrar_Adopcion () {
//UTILIZAR LA FUNCION BORRAR DE CRUD

    }
}