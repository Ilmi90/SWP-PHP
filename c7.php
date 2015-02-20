<?php

// $a= 10; // integer
// $b = "10"; // string

// if ($a == $b) {

// 	echo "da";
// } else {

// 	echo "ne";
// }




// $c = 4;

// if ($c == 3) {

// 	echo "ednakvo na 3";
// }else {

// 	echo "drug broj";
// }





// $d = 10;

// if ($d < 10) {

// 	echo "pomalo od 10";
// }else if ($d > 10) {

// 	echo "pogolemo od 10";
// }else {

// 	echo "ednakvo na 10";
// }





// $ime = "Bojan Goran";

// $br = strlen($ime); // strlen ja vrakja dolzhinata na stringot vo promenlivata $ime

// //echo $br;

// $chisto_ime = str_replace (" ",'',$ime);

// $br2 = strlen($chisto_ime);

// echo "$br2";




// $ime = "Aleksandar";

// $number = strlen($ime); 

// if ($number % 2 == 0) {

// 	echo "paren";
// } else {

// 	echo "neparen";
// }




// $e = 10;

// if (($e == 10 || $e < 10) || $e == 9) {

// 	echo "vistina";
// }




// $f = 10;

// switch ($f) {

// 	case 10:
// 		echo "10";
// 		break;

// 	case 11:
// 		echo "11";
// 		break;
// }




$ime = "Aleksandar";

$dolzina = strlen($ime);

switch ($dolzina % 2){
	
	case 0:
		echo "paren";
		break;

	case 1:
		echo "neparen";
		break;
}		

?>