<?php

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$num3 = $_POST['numero3'];
$num4 = $_POST['numero4'];

$media = ($num1 + $num2 + $num3 + $num4) / 4;

echo "La media de los números es $media";

$algunNumeroMayorQueLaMedia = false;

if ($num1 > $media){
    $algunNumeroMayorQueLaMedia = true;
    echo "$num1 es mayor que la media";
}

if ($num2 > $media) {
    $algunNumeroMayorQueLaMedia = true;
    echo "$num2 es mayor que la media";
}

if ($num3 > $media) {
    $algunNumeroMayorQueLaMedia = true;
    echo "$num3 es mayor que la media";
}

if ($num4 > $media) {
    $algunNumeroMayorQueLaMedia = true;
    echo "$num4 es mayor que la media";
}

if (!$algunNumeroMayorQueLaMedia){
    echo "Ningún número es mayor que la media";
}

/*
if ($num1 == $media && $num2 == $media && $num3 == $media && $num4 == $media){
    echo "No hay ningún número mayor que la media";
}
*/