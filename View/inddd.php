<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        

    </form>
</body>
</html>


<?php


require '../Model/Adopcion.php';

$usuario = new Usuario('marcos','pedrino','hombre','amapola 13','918476638',34,'protectora_animales');

// // print_r($usuario);
// // echo "<br/>";
$usuario->crear();

$usuario2 = new Animal('thor','pez','comun','femenino','naranja',3,'protectora_animales');
echo "<br/>";echo "<br/>";
// //print_r($usuario);
// // echo "<br/>";
 $usuario2->crear();
 print_r($usuario2);
 echo "<br/>";echo "<br/>";
 $prueba = new Adopcion($usuario2->__get('Id'),$usuario->__get('Id'),'2022-12-07','regalo','protectora_animales');
 echo "<br/>";echo "<br/>";
 print_r($prueba);
 echo "<br/>";echo "<br/>";
 $prueba->crear();
 echo "<br/>";echo "<br/>";
 print_r($prueba);
$prueba->__set('razon','pepito');
$prueba->actualizar();
?>