<?php

$edad = $_POST['edad'];
$estado_civil = $_POST['estado_civil'];

if ($edad < 35) {
    if ($estado_civil == 'soltero' || $estado_civil == 'divorciado'){
        $retencion = 12;
    }
    else {
        $retencion = 11.3;
    }
}
else if ($edad > 50){
    $retencion = 8.5;
}
else {
    $retencion = 10.5;
}

echo "Tu retención es de $retencion";