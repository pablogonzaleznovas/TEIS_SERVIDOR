<!doctype html>
<html>
<head>	
<meta charset="utf-8">
<title>Formulario Ejercicio 10 </title>
</head>
<body>
<?php
$lista[0]=$_POST['num1'];
$lista[1]=$_POST['num2'];
$lista[2]=$_POST['num3'];
$lista[3]=$_POST['num4'];
$lista[4]=$_POST['num5'];
$lista[5]=$_POST['num6'];
$lista[6]=$_POST['num7'];
$lista[7]=$_POST['num8'];
$lista[8]=$_POST['num9'];
$lista[9]=$_POST['num10'];
$min=$lista[0];
$max=$lista[0];
for ($i = 1; $i < 9	; $i++) {
	if ($lista[$i] <$min){
			$min=$lista[$i];
	}
	if ($lista[$i] >$max){
			$max=$lista[$i];
	}
}
echo "Estos son los valores introducidos";
print_r($lista);
echo "<br/>El número mayor es: $max <br/>";
echo "El número menor es: $min <br/>";
?>	
</body>
</html>	