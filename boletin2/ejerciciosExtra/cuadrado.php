<?php

$lado = $_POST["lado"];

// Pintaremos un cuadrado de tamaño $lado * $lado

for ($i = 0; $i < $lado; $i++){
    for ($j = 0; $j < $lado; $j++){
        if ($j == 0 || $i == 0 || $j == ($lado - 1) || $i == ($lado - 1)){
            echo "&nbsp;*&nbsp;&nbsp;";
        }
        else if ($i == $j || $j == ($lado - 1 - $i)){
            echo "&nbsp;*&nbsp;&nbsp;";
        }
        else {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}