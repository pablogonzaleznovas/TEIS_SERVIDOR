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
echo "a) transforme unha cadea en maiúsculas &nbsp ".strtoupper($texto)."<br/>";
echo "b) transforme unha cadea en minúsculas: &nbsp".strtolower($texto)."<br/>";
echo "c) converte a primeira letra da oración en maiúscula: &nbsp". ucfirst($texto)."<br/>";
echo "d) converte a primeira letra de cada palabra da oración a maiúsculas: &nbsp".ucwords($texto)."<br/>";

/*
$hora="092402020580";
$horaOK="";

echo "La hora introducida es: &nbsp $hora. <br/>";
for ($i=0; $i <strlen($hora) ; $i++) {
    if (((($i+1)%2)==1) && ($i>0))
        { 
            $horaOK=$horaOK.":"; 
        }
    $horaOK=$horaOK.$hora[$i];
    }
echo "Tras realizar los cambios, la hora formateada es: &nbsp $horaOK. <br/>";
*/
$hora2="246061";
$horaOK2="";
if (strlen($hora2)==6){
    $horas=substr($hora2,0,2);
    $minutos=substr($hora2,2,2);
    $segundo=substr($hora2,4,2);
    $check=0;
    if ($horas>24){
        echo"Este texto no es posible darle el formato de hh:mm:ss, puesto que se las horas superan las 24 horas.";
        $check=1;
    }
    if ($minutos>60){
        echo"Este texto no es posible darle el formato de hh:mm:ss, puesto que se superan los 60 minutos";
        $check=2;
    }
    if ($segundo>60){
        echo"Este texto no es posible darle el formato de hh:mm:ss, puesto que se superan los 60 segundos";
        $check=3;
    }
    if ($check==0){
        $hora2=$horas.":".$minutos.":".$segundo;
        echo "Formato correcto: $hora2 <br/>";
    }
}else
    echo "Este texto no es posible darle el formato de hh:mm:ss, puesto que no tiene 6 dígitos";

?>