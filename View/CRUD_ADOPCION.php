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
    require '../Controller/Controlador_Adopcion.php';
    echo 'pepeeeeeeeeeeee '.$_GET['value'];
    $value=$_GET['value'];
    
    if ($value=='crear'){
        echo "addd";
        $x = new Controlador_Adopcion();
        $x->crear_Adopcion();
    }else if ($value=='editar'){
        $id=$_GET['id'];
        $x = new Controlador_Adopcion();
        $x->editar_Adopcion();
       
    }else {
        echo "pepe";
    }
    ?>
</body>
</html>