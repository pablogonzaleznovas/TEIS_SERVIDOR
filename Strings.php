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
echo "a) transforme unha cadea en maiúsculas $nsbp".strtoupper($texto)."<br/>";
echo "b) transforme unha cadea en minúsculas: $nsbp".strtolower($texto)."<br/>";
echo "c) converte a primeira letra da oración en maiúscula: $nsbp". ucfirst($texto)."<br/>";
echo "d) converte a primeira letra de cada palabra da oración a maiúsculas: $nsbp".ucwords($texto)."<br/>";

?>