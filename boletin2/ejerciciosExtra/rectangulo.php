<?php

$base = $_POST["base"];
$altura = $_POST["altura"];

// Pintaremos un cuadrado de tamaño $lado * $lado

for ($i = 0; $i < $altura; $i++){
    for ($j = 0; $j < $base; $j++){
        if ($j == 0 || $i == 0 || $j == ($base - 1) || $i == ($altura - 1)){
            echo "* ";
        }
        else {
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}