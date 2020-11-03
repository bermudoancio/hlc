<?php

    $numero = $_GET["numero"];

    $resto = $numero % 2;

    if ($resto == 0){
        echo "El número $numero es par";
    }
    else {
        echo "El número $numero es impar";
    }