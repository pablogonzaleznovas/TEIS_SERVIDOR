<?php

$compr=TRUE;
$resultado=0;
$boolean1=FALSE;
$boolean2=1;

if ($resultado) {
    echo "resultado declarado 0, verdadero <BR>";
}
else {
    echo "resultado declarado 0, falso <BR>";
    $resultado=4;
    if ($resultado) {
        echo "resultado reasigando a 4, verdadero <BR>";
    }
    else {
        echo "resultado reasigando a 4, falso <BR>";
    }
}



if ($compr) {
    echo "compr declarado TRUE, verdadero<BR>";
    $compr=2;
    if ($compr) {
        echo "compr reasigando 4, verdadero<BR>";
        $compr=2;
        
    }
    else {
        echo "compr reasigando 4, falso <BR>";
    }
    
}
else {
    echo "compr declarado TRUE, falso <BR>";
}


if ($boolean1) {
    echo "boolean1 declarado FALSE, verdadero <BR>";
}
else {
    echo "boolean1 declarado FALSE, falso <BR>";
}


if ($boolean2) {
    echo "boolean2 declarado 1, verdadero <BR>";
}
else {
    echo "boolean2 declarado 1, falso <BR>";
}





?>