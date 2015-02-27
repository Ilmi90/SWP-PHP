<?php

// Funksioni mund te emerohet si te duam ne
function zdravo(){

	echo "Zdravo";
	echo "<br/>";
} 

zdravo();

// Funksioni mund te emerohet si te duam ne ushtrimi i 2

function pero(){

	echo "Pero nas golem Maz";
	echo "<br/>";

}

pero ();

// Funksioni eshte i dhene dhe e therasim funksionin.

function mleko ($tip){

	echo $tip;
	echo "<hr/>";
}

mleko ('Bitolsko');
mleko ('Tursko');

// Sum of the numbers // Shuma e numerave ne funksion

function sobiranje($a, $b){

echo $a + $b;
echo "<hr/>";
}

sobiranje (2,6);
sobiranje (44,65);
sobiranje (113, 662);

// Sum of the numbers


// Minus i Numrave
function odzemanje($c, $d){

	echo $c - $d;
	echo "<hr/>";

}

odzemanje (6, 4);
odzemanje (44, 23);
odzemanje (66, 78);

// Minus i Numrave

// Numrat shumezohen, dhe pjesetohen.

function delenje($e, $f) {

	echo $e / $f;
	echo "<hr/>";

}

delenje	(30, 5);
delenje	(223, 42);
delenje	(2321, 223);


function mnozenje($g, $m) {

	echo $g*$m;
	echo "<hr/>";

}

mnozenje (30, 32);
mnozenje (243, 45);
mnozenje (221, 22);

// Numrat shumezohen, dhe pjesetohen.

	echo "<hr/>";

	// thirim funksionin Pozdrav dhe vendojm ndonje parametar, e thirim funkcionin Pozdrav i cili e nderon parametrin e meparshem me te fundit.

function pozdrav ($ime='Bojan') {

	echo 'Zdravo'.$ime;
	echo "<hr/>";
}

pozdrav('Pero');
pozdrav();


function myfunction($ime) {

	$dolzina = strlen($ime);

	if ($dolzina % 2 == 0) {

		echo "paren";
	} else {

		echo "neparen";
	}

	echo "<hr/>";

}
	myfunction('Bojan');
	myfunction('Ilmi');
	myfunction('Ardian');
?>











