<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'Controlador_Adopcion.php';
    $value=$_GET['value'];
    
    if ($value=='crear'){
        $x = new Controlador_Adopcion();
        $x->crear_Adopcion();
    }else if ($value=='editar'){
        $id=$_GET['id'];
        $x = new Controlador_Adopcion();
        $x->editar_Adopcion();
       
    }else if($value=='borrar'){
        $id=$_GET['id'];
        $x = new Controlador_Adopcion();
        $x->borrar_Adopcion();
    }
    ?>
</body>
</html>