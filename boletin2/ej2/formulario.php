<?php

$num = $_POST['num'];

if ($num < 0 || $num > 10) {
	echo "No puedo mostrar esa tabla";
}
else {
    for ($i = 0; $i <= 10; $i++){
		echo "$num * $i = " . ($num * $i) . "<br>";
	}
}