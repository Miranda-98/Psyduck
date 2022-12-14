<?php
//require 'Animal.php';
require_once "Animal.php";


class Adopcion extends Crud {
    
    private $Id;
    private $idanimal;
    private $idusuario;
    private $fecha;
    private $razon;
    
    private $conexion;
    public static $TABLA = 'adopcion';

    function __construct ($idanimal, $idusuario, $fecha, $razon, $conexion){
        parent::__construct($conexion,self::$TABLA);
        //$this->Id=$id;
        $this->idanimal=$idanimal;
        $this->idusuario=$idusuario;
        $this->fecha=$fecha;
        $this->razon=$razon;
        // $this->color=$color;
        // $this->edad=$edad;
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

    function datosTablaAdopcion() {
        $registros=parent::obtieneTodos();
        return $registros;
}

    function crear (){
        try{
        $conn=$this->conexion;
//RECOGEMOS EL MAXIMO IF Y LO GUARDAMOS EN LAS PROPIEDADES DE LA INSTANCIA
        $sql="SELECT MAX(id) from adopcion;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $registros=$stmt->fetch();
        $this->Id=$registros[0]+1;
//INSERTAMOS EN LA BD CON LOS VALORES
        $sql="INSERT INTO adopcion (idAnimal, idUsuario, fecha, razon) VALUES (:A,:B,:C,:D)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':A', $this->idanimal);
        $stmt->bindParam(':B', $this->idusuario);
        $stmt->bindParam(':C', $this->fecha);
        $stmt->bindParam(':D', $this->razon);
        $stmt->execute();
            //echo 'insertado';
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }

    function actualizar (){
        try{
        $conn=$this->conexion;
       //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE adopcion SET idAnimal=:A, idUsuario=:B, fecha=:C, razon=:E WHERE id=:D";
        $stms = $conn->prepare($sql);
        $stms->bindParam(':A', $this->idanimal);
        $stms->bindParam(':B', $this->idusuario);
        $stms->bindParam(':C', $this->fecha);
        $stms->bindParam(':D', $this->Id);
        $stms->bindParam(':E', $this->razon);
    
        if($stms->execute())
        //ECHO  "La adopcion se ha Actualizado correctamente"
        ;
        }catch(PDOException $e){
            return "Error: " . $e->getMessage();
        }
    }

}

?>