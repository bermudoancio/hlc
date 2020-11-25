<?php

$suma = 0;
for ($i = 1; $i <= 10; $i++){
    if (is_numeric($_POST["txt$i"]) && $_POST["txt$i"] >= 10){
        $suma += $_POST["txt$i"];
    }
}


echo "La suma de los números vale $suma";
