<?php
#por si funciona OK

$texto="hola mundo";
$salida="";
echo "El texto inicial que fue introducido es: $texto <br/>";
for ($i=0; $i <strlen($texto) ; $i++) {
    if ($texto[$i]==" ") {
        $salida[$i]="*";      
    }else{
        $salida[$i]=$texto[$i];
    }
}
echo "Tras realizar los cambios el resultado es: $salida <br/>";




?>