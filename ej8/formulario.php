<?php

$hora1 = $_POST['hora1'];
$min1 = $_POST['min1'];
$seg1 = $_POST['seg1'];

$hora2 = $_POST['hora2'];
$min2 = $_POST['min2'];
$seg2 = $_POST['seg2'];

if ($hora1 < 0 || $hora1 > 23 || $hora2 < 0 || $hora2 > 23){
    echo "La hora no es válida<br>";
}
else if ($min1 < 0 || $min1 > 59 || $min2 < 0 || $min2 > 59){
    echo "Los minutos no son válidos<br>";
}
else if ($seg1 < 0 || $seg1 > 59 || $seg2 < 0 || $seg2 > 59){
    echo "Los segundos no son válidos<br>";
}
else {
    /* Método 1
    if ($hora1 > $hora2){
        echo "Hora 1 es mayor";
    }
    else if ($hora1 < $hora2){
        echo "Hora 2 es mayor";
    }
    else {
        if ($min1 > $min2){
            echo "Hora 1 es mayor";
        }
        else if ($min1 < $min2){
            echo "Hora 2 es mayor";
        }
        else {
            if ($seg1 > $seg2){
                echo "Hora 1 es mayor";
            }
            else if ($seg1 < $seg2){
                echo "Hora 2 es mayor";
            }
            else {
                echo "Las horas son iguales";
            }
        }
    }
    */
    // Método 2
    $tiempo1 = $hora1 * 3600 + $min1 * 60 + $seg1;
    $tiempo2 = $hora2 * 3600 + $min2 * 60 + $seg2;

    if ($tiempo1 > $tiempo2){
        echo "La hora 1 es mayor";
    }
    else if ($tiempo1 < $tiempo2){
        echo "La hora 2 es mayor";
    }
    else {
        echo "Las horas son iguales";
    }
}
