<?php

$altura = $_POST['altura'];

for ($i = 0; $i < $altura; $i++){ // - pinta las filas
    for ($j = 0; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

for ($i = 0; $i < $altura; $i++){ // - pinta las filas
    for ($j = 0; $j < $altura - $i; $j++){
        echo "*";
    }
    echo "<br>";
}