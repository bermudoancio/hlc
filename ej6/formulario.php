<?php

$caracter = $_POST["caracter"];

$primer_c = substr($caracter, 0, 1);

switch ($primer_c){
    case 'a':
        echo "Es la primera vocal (A)";
        break;
    case 'e':
        echo "Es la segunda vocal (E)";
        break;
    case 'i':
        echo "Es la tercera vocal (I)";
        break;
    case 'o':
        echo "Es la cuarta vocal (O)";
        break;
    case 'u':
        echo "Es la quinta vocal (U)";
        break;
    default:
        echo "No es una vocal";
}