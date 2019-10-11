<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
</head>
<body>
<?php
$num=9;//longitud
$saida; //Cadena a sacar por  pantalla por cada linea del 1º bucle
for ($i = 1; $i <= $num; $i++) {

    for ($j = 1; $j <= $num; $j++) 
    {
        //ir escribiendo espacios vacios
        if ((($num/2)+1)> $i){
           $saida=$saida."&nbsp"; 
        };
        //ir escribiendo asteriscos
        if ($i==$j) {
             
        }

       echo $saida;

    }
    echo $saida;
    echo "<br>";
}
?>

</body>
</html>
