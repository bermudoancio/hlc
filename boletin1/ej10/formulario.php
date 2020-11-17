<?php

$op = $_POST['operador'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

switch($op){
	case '+':
		echo $num1 + $num2;
		echo '<br>';
	case '-':
		echo $num1 - $num2;
		break;
	case '*':
		echo $num1 * $num2;
		break;
	case '/':
		if ($num2 == 0){
			echo "No puedo dividir por 0";
		}
		else{
			echo $num1 / $num2;
		}
		break;
	case '%':
		if ($num2 == 0){
			echo "No puedo dividir por 0";
		}
		else{
			echo $num1 % $num2;
		}
		break;
	default:
		echo "No entiendo el operador, prueba con uno de estos: + - * / %";
}
