<?php


$a = $_POST ["a"];
$op = $_POST ["op"];

// echo $a." ".$op." "." = ";

if ($op == "C") {

	echo $a.'F = ';
	echo ($a-32)*5/9 ;
	echo 'C';

}

if ($op == "F") {
	echo $a.'C = ';
	echo ($a*9/5+32) ;
	echo 'F';
}


?>