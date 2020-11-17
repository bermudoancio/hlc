<?php

//Obtenemos los datos del formulario
$edad = $_POST["edad"];

if (!is_numeric($edad)){
    echo "Edad debe ser un número";
}
else {
    echo "El parámetro es un número";
}

if ($edad <= 0) {
    echo "No sé lo que eres, pero humano, no.";
} 
else if ($edad <= 12) {
    echo "Eres un niño";
}
else if ($edad <= 17) {
    echo "Eres un adolescente";
}
else if ($edad <= 29) {
    echo "Eres un joven";
}
else if ($edad < 100) {
    echo "Eres un adulto (o un viejales)";
}
else {
    echo "Debes ser menor de 100 años para usar el programa";
}