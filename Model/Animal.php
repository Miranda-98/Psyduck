<?php
//require 'Usuario.php';
require_once "Usuario.php";

class Animal extends Crud {
    
    private $Id;
    private $nombre;
    private $especie;
    private $raza;
    private $genero;
    private $color;
    private $edad;
    private $conexion;
    public static $TABLA = 'animal';

    function __construct ($nombre, $especie, $raza, $genero, $color, $edad, $conexion){
        parent::__construct($conexion,self::$TABLA);
        //$this->Id=$id;
        $this->nombre=$nombre;
        $this->especie=$especie;
        $this->raza=$raza;
        $this->genero=$genero;
        $this->color=$color;
        $this->edad=$edad;
        $this->conexion=parent::conectar();

    }
    // Metodos Magicos
    function __get($valor)
    {
        return $this->$valor;
    }

    function __set($valor, $nuevoValor)
    {
        $this->$valor = $nuevoValor;
    }

    function datosTablaAnimal() {
 
        try{
            $conn=$this->conexion;
            $sql = "SELECT * from ".self::$TABLA;
            $result = $conn->query($sql);
            return $result;

        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    function crear (){
        try{
        $conn=$this->conexion;
//RECOGEMOS EL MAXIMO IF Y LO GUARDAMOS EN LAS PROPIEDADES DE LA INSTANCIA
        $sql="SELECT MAX(id) from animal;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $registros=$stmt->fetch();
        $this->Id=$registros[0]+1;
//INSERTAMOS EN LA BD CON LOS VALORES
        $sql="INSERT INTO animal (nombre, especie, raza, genero, color, edad) VALUES (:A,:B,:C,:D,:E,:F)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':A', $this->nombre);
        $stmt->bindParam(':B', $this->especie);
        $stmt->bindParam(':C', $this->raza);
        $stmt->bindParam(':D', $this->genero);
        $stmt->bindParam(':E', $this->color);
        $stmt->bindParam(':F', $this->edad);
        $stmt->execute();
           // echo 'insertado';
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }

    function actualizar (){
        try{
        $conn=$this->conexion;
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE animal SET nombre=:A, especie=:B, raza=:C, genero=:E, color=:F, edad=:G WHERE id=:D";
        $stms = $conn->prepare($sql);
        $stms->bindParam(':A', $this->nombre);
        $stms->bindParam(':B', $this->especie);
        $stms->bindParam(':C', $this->raza);
        $stms->bindParam(':D', $this->Id);
        $stms->bindParam(':E', $this->genero);
        $stms->bindParam(':F', $this->color);
        $stms->bindParam(':G', $this->edad);
    
        if($stms->execute())
        //ECHO  "El animal se ha Actualizado correctamente"
        ;
        }catch(PDOException $e){
            return "Error: " . $e->getMessage();
        }
    }

}


?>