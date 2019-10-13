<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo1.css">
<title>Ejercicios Servidor</title>
</head>

<body>
<h1><big>Actividades Propostas </big> </h1>
<div class="enunciados">1.-Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base de la pirámide debe estar formada por 9 asteriscos.<br/><br/></div>
<?php
for($row = 1; $row <= 10; $row ++) {
        $stars = str_repeat('&nbsp*&nbsp&nbsp&nbsp', $row);
        $space = str_repeat('&nbsp&nbsp&nbsp', 10 - $row);
        echo $space . $stars;
	    echo '<br/>';
    }
?>	
<div class="enunciados"><br/>2.-Igual que el programa anterior, pero esta vez la pirámide debe aparecer invertida, con el vértice hacia abajo.<br/><br/></div>
<?php 
for($row = 0; $row <= 10; $row ++) {
        $space = str_repeat('&nbsp&nbsp&nbsp', $row);
        $stars = str_repeat('&nbsp*&nbsp&nbsp&nbsp', 10 - $row);
        echo $space . $stars;
	    echo '<br/>';
    }
?>	
<div class="enunciados">3.-Crea un programa en php que chama a unha funcion á que se lle pasa un parametro por valor, e o incrementa e 1. Debe mostrar o valor da variable antes e despois da chamada á función, e o valor dentro da función. Exemplo de saída: o valor inicial da variable x é 3 o valor de x dentro da función é 4 o valor de x ao rematar a función é 3.<br/><br/></div>

<?php
$num=3;
echo "El valor de la variable \$num es $num .<br/>";
function incrementa($num){
	$num++;
	echo "Dentro de la funcion incrementa, su valor es $num .<br/>";	
}
incrementa($num);
echo "Luego, fuera de la función, la variable \$num continua valiendo $num .<br/>";	
?>

<div class="enunciados"><br/>4.-Fai o mesmo que no exercicio anterior pero co parámetro pasado por refencia.<br/><br/></div>
<?php
$num=3;
$num2=$num;
echo "El valor de la variable \$num es $num2 .<br/>";
function incrementa2($num2){
	$num2++;
	echo "Dentro de la funcion incrementa, su valor es $num2 .<br/>";	
}
incrementa2($num2);
echo "Luego, fuera de la función, la variable \$num continua valiendo $num2 .<br/>";	
?>
<div class="enunciados"><br/>5.- a) Genera un array t[8][8]. Haz que cada uno de sus elementos se rellene aleatoriamente con valores que pueden ser 0,1 y 2. 
b) Indica qué casillas están a 0 y tienen algún 1 a su alrededor (ambas condiciones simultáneamente). <br/><br/></div>
<?php

//ToDo




?>
<div class="enunciados"><br/>6. Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 11, de 12 a 19 y de 20 a 5. respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.<br/><br/></div>
<?php
    // ToDo
	$hora=1;
//echo "Introduce una hora: ";
//fscanf(number_format(),$hora);
	if(($hora<0)||($hora>=24)){
		echo " La hora introducida es errónea. <br/>";
	}
	elseif ($hora <=5){
		echo "Buenos noches. <br/>";
	}
	elseif (($hora >=6) && ($hora<=11)){
		echo "Buenos días. <br/>";
	}elseif ($hora<=19){
		echo"Buenas tardes. <br/>";
	} else {
		echo "Buenas noches. <br/>"; }	
?>
<div class="enunciados"><br/>7. Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día de la semana.<br/><br/></div>
<?php
    // ToDo
$dia=11;
switch ($dia) {
    case 1:
        echo "Lunes.";
        break;
    case 2:
        echo "Martes.";
        break;
    case 3:
        echo "Miercoles.";
        break;		
    case 4:
        echo "Jueves.";
        break;
    case 5:
        echo "Viernes.";
        break;
    case 6:
		echo "Sábado.";
        break;
    case 7:
        echo "Domingo.";
        break;
	default:
		echo "Por favor, introduce correctamente un número entero entre 1 y 7, respectivamente.";
		break;
}
?>
<div class="enunciados"><br/>8. Escribe un programa que ordene números enteros introducidos por teclado.<br/><br/></div>
<?php
$array1 = array(8,5,7,3,4,1,9);
echo " Mostramos el valor del array: <br/>";
print_r($array1);
echo "<br/> Mostramos el valor del array ordenado: <br/>";
print_r($array1);
?>	
<div class="enunciados"><br/>9. Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. El primer término de la
 serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores, por lo que tendríamos que los términos son 
 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144… El número n se debe introducir por teclado.<br/><br/></div>
<?php
$arrFibonacci = array(0,1,1);
$limit=7;
$sum=0;
    for($i=0;$i<=($limit) ;$i++){
        if ($i==(count($arrFibonacci))){
            $arrFibonacci[$i]=$arrFibonacci[($i-2)]+$arrFibonacci[($i-1)];
            echo "Hemos añadido un registro al array $arrFibonacci[$i] <br/>";
        }
    }
?>
<div class="enunciados"><br/>10. Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
 Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben almacenar los cuadrados de los 
 valores que hay en el array “numero”. En el array “cubo” se deben almacenar los cubos de los valores que hay en “numero”.
  A continuación, muestra el contenido de los tres arrays dispuesto en tres columnas. 	<br/><br/></div>
<?php
// en cuadrado almacenas el valor de esa misma posicion elevado al cuadrado
// en cubo igualmente


?>
<div class="enunciados"><br/>11. Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente. <br/><br/></div>
<?php
	
	echo "La solución está en el archivo 'formulario.php' (solicita los datos) y en el archivo 'gestiona.php' es donde muestra el resultado solicitado en el enunciado. <br/>";
	
?>

<div class="enunciados"><br/>12. 	<br/><br/></div>
<?php
#por si funciona OK


?>
<div class="enunciados"><br/>13.
<br> Crea 4 funciones para cada funcionalidad. <br/>
<br> a) transforme unha cadea en maiúsculas <br/>
<br> b) transforme unha cadea en minúsculas<br/>
<br> c) converte a primeira letra da oración en maiúscula<br/>
<br> d) converte a primeira letra de cada palabra da oración a maiúsculas<br/>
<br> La página tendrá un único input para la cadena, el modo de elegir la funcionalidad es abierto (botones, un selector…) 	<br/><br/></div>
<?php
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

<div class="enunciados"><br/>14. Divida a cadea separando por dous puntos (o que puidera ser un formato hh:mm:ss)
Exemplo de entrada : '092402' --> 	Exemplo de saída : 09:24:02	<br/><br/></div>
<?php
$entrada="092402";
$salida;
$longitud= strlen($entrada);


	
	
?>

<div class="enunciados"><br/>15.Comprobe se unha cadea está contida dentro doutra cadea
Exemplo de entrada : 'A galiña azul salta sobre o seu niño' --> Comprobas se conten a palabra ‘salta’ <br/><br/></div>
<?php
	
	
	
?>
	
<div class="enunciados"><br/>16. Extraia o nome do ficheiro dunha ruta.
Exemplo de entrada : 'www.exemplo.com/public_html/index.php' --> Exemplo de saída : 'index.php'
Pista extra --> Tamén se pode facer de xeito máis áxil coa función basename	<br/><br/></div>
<?php
	

	
?>

<div class="enunciados"><br/>17. Extraia o nome de usuario dunha conta de correo electrónico
Exemplo de entrada : 'jose@exemplo.gal' --> Exemplo de saída : 'jose' <br/><br/></div>
<?php


	
?>

<div class="enunciados"><br/>18. Obteña os tres últimos caracteres dunha cadea:
Exemplo de entrada : 'jose@exemplo.gal' --> Exemplo de saída : 'gal' <br/><br/></div>
<?php


	
?>

<div class="enunciados"><br/>19. Reemplace a primeira ocurrencia da cadea ‘este’ por ‘aquel”
Exemplo de entrada : 'este é un lapis estupendo' --> Exemplo de saída : ‘aquel é un lapis estupendo’ <br/><br/></div>
<?php


	
?>

<div class="enunciados"><br/>20.Atope o primeiro carácter que é diferente entre dúas cadeas
Cadea1 : 'casa'	Cadea2 : 'cata'	--> Exemplo de saída : Primeira diferenza na posición 3: "s" vs "t"	<br/><br/></div>
<?php


	
?>

<div class="enunciados"><br/>21. Mostra o dominio dunha conta de correo
Exemplo de entrada : ''jose@exemplo.gal' --> Exemplo de saída : 'exemplo.gal' <br/><br/></div>
<?php


	
?>

<div class="enunciados"><br/>22. Elimina os 0’s a esquerda
Exemplo de entrada : '000327023.24'
Exemplo de saída : '327023.24' <br/><br/></div>
<?php
	
	
	
?>

<div class="enunciados"><br/>23. Escribir un algoritmo que…
a) solicite un número y nos diga si es capicúa. Para ello programa la función esCapicua.
b) solicite un número N y nos visualice la suma de todos los números capicúa menores que N	<br/><br/></div>
<?php
	
	
	
?>

<div class="enunciados"><br/>24. Crear una página que compruebe la validez de DNIs.	<br/><br/></div>
<?php
	
	
	
?>
	
<div class="enunciados"><br/>25.Haz un formulario con radio button para elegir círculo, triángulo y cuadrado y calcular su área en cada caso. De momento poner todos los input necesarios. <br/><br/></div>
<?php
	
	
	
?>

<div class="enunciados"><br/>26. Programa que devuelva:
●	qué navegador está utilizando el cliente
●	la versión de Php
●	El protocolo, nombre del host y el path de la página en el servidor
●	IP del cliente, la IP del servidor y el nombre del fichero que se está ejecutando
●	propietario del fichero que está en ejecución
●	url actual	<br/><br/></div>
<?php
	
	
	
?>
	
</body>
</html>
