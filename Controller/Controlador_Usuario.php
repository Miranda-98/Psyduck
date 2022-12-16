<?php

require "Controlador_Adopcion.php";
require "../View/Estilos.php";

class Controlador_Usuario extends Usuario{

    private $usuario;

    function __construct (){
        $this->usuario=new Usuario('pepe ', '', '', '', '', 'protectora_animales');
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
                        <td>EDAD</td>

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
             
               
                "<td><a href='Controlador_Vista_Usuario.php?id=$x->id & value=editar'>Editar</a></td>",
                "<td><a href='Controlador_Vista_Usuario.php?id=$x->id & value=borrar'>Borrar</a></td>";
            "</tr>";      
        }
        echo "</table>";

    }

    function crear_Usuario () {
        echo "<form method='post' action=''>",
        "<label for='nombre'> Nombre </label>",
        "<input type='text' name='nombre' required/><br><br>",

        "<label for='especie'> Apellido </label>",
        "<input type='text' name='apellido' required/><br><br>",

        "<label for='raza'> Sexo </label>",
        "<input type='text' name='sexo' required/><br><br>",


        "<label for='genero'> Dirección </label>",
        "<input type='text' name='direccion' required/><br><br>",

        "<label for='nombre'> Telefono </label>",
        "<input type='text' name='telefono' required/><br><br>",

        "<br><input type='submit' name='botonEnviar' value='Crear' /><br><br>",
        "<a href='../Controller/core.php?controlador=controlador&valor=animal'>Volver</a>",
        "</form>";

        if (isset($_POST['botonEnviar'])) {
            $pepe= new Usuario($_POST['nombre'],$_POST['apellido'],$_POST['sexo'],$_POST['direccion'],$_POST['telefono'],'protectora_animales');
            $pepe->crear();
            header("location:core.php?valor=usuario&controlador=controlador");
        }
    }

    function editar_Usuarios() {
//UTILIZAR LA FUNCION ACTUALIZAR DE USUARIOS
$pepo=$this->usuario;
        $id=$_GET['id'];
        $result=$pepo->obtienedeid($id);
        print_r($result);
         
        $html = "<form  method='post'>";
        $html .="<fieldset><legend>Datos actuales del usuario a modificar</legend>" ;
        $html .="<input type='hidden' name='hiddenId' value='" . $result[0]->id . "'><br><br/>";                    
        $html .= "Nombre: <input type='text' name='nombre' value='" . $result[0]->nombre . "'><br><br/>";
        $html .= "Apellidos:  <input type='text' name='apellido' value='" . $result[0]->apellido . "'><br><br/>";
        $html .= "Sexo: <input  type='text' name='sexo' value='" . $result[0]->sexo . "'><br><br/>" ;
        $html .= "Dirección: <input type='text' name='direccion' value='" . $result[0]->direccion . "'><br><br/>";
        $html .= "Telefono: <input type='text' name='telefono' value='" . $result[0]->telefono . "'><br><br/>";
        //$html .= "Edad: <input type='text' name='edad' value='" . $result[0]->edad . "'><br><br/>";
        $html .= "<input type='submit' name='btnModificar' value='Modificar'>";
        $html .= "</fieldset></form>";
        $html .= "<a href='../Controller/core.php?controlador=controlador&valor=usuario'>Volver</a>";
        echo $html;
        
                if(isset($_POST['btnModificar'])){
                    $pepe= new Usuario($_POST['nombre'],$_POST['apellido'],$_POST['sexo'],$_POST['direccion'],$_POST['telefono'],'protectora_animales');
                    $pepe->__set('Id',$_POST['hiddenId']);
                    $pepe->actualizar();
                    header("location:core.php?valor=usuario&controlador=controlador");
                }

            }
    

    function borrar_Usuarios() {
//UTILIZAR LA FUNCION BORRAR DE CRUD
$pepo = $this->usuario;
$id=$_GET['id'];
$html = "<h1>¿Seguro que desea borrar este animal?</h1>";
$html .= "<form  method='post'>";
$html .= "<input type='submit' name='btnAceptar' value='Aceptar'>";
$html .= "<input type='submit' name='btnBorrar' value='Cancelar'>";
$html .= "</form>";
echo $html;

if(isset($_POST['btnAceptar'])){

$pepo->borrar($id);
header("location:core.php?valor=usuario&controlador=controlador");

}else if (isset($_POST['btnBorrar'])){
    header("location:core.php?valor=usuario&controlador=controlador");

}

    }
}