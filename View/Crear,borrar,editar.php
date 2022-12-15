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
    require '../Controller/Controlador_Animal.php';
    $value=$_GET['value'];
    
    if ($value=='crear'){
        $x = new Controlador_Animal();
        $x->crear_Animales();
    }else if ($value=='editar'){
        $id=$_GET['id'];
        $x = new Controlador_Animal();
            $x->editar_Animales();
       
    }else if($value=='borrar'){
        $id=$_GET['id'];
        $x = new Controlador_Animal();
            $x->borrar_Animales();
    }
    ?>
</body>
</html>