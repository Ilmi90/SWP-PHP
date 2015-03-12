<?php

echo "Function Examples" ;

echo "<hr/>";
echo "<br>";

function hello ($name = "Ilmi", $surname="Ramadani") {

	echo 'My name is:'.$name;
	echo "<br>";
	echo 'My surname is:'.$surname;

}

hello();

echo "<hr/>";


function sumof ($a, $b, $c, $d) {

	echo $a+$b+$c;
	echo "<br>";
	echo $a+$c;
	echo "<br>";
	echo $c+$d;
}

sumof(30,50,22,15);

echo"<hr/>";


function chesse ($type, $size, $color) {

	echo $type;
	echo "<br>";
	echo $size;
	echo "<br>";
	echo $color;
	echo "<br>";

}

chesse ("white", "50-liter","blue");

echo"<hr/>";


echo "Array Examples" ;

echo "<hr/>";
echo "<br>";


$city[1] ='Milan';
$city[2] ='Barcelona';
$city[3] ='Viena';

print_r($city);

echo "<hr/>";


echo "Array in Array Examples" ;

echo "<hr/>";
echo "<br>";

$name = array (

	TRUE,
	'String',
	5230,
	3.423,

array (

	'Hamburger',
	'Ilmi',
	'Tetovo',

	),

array (

	'Pizza',
	'Skopje',
	'Aleksandar',

	)
);

// print_r($name);

echo $name [4][1];
echo "<br>";
echo $name [5][1];
echo "<br>";
echo $name [5][2];

echo "<hr/>";


$information = array (

array (
'name'=>'Ilmi',
'surname'=>'Ramadani',
'city'=>'Tetovo',
'mobile'=>'0099002',

	),

array (

'name'=>'Janko',
'surname'=>'Stankovski',
'city'=>'Debar',
'mobile'=>'00223042',

	)
);

// print_r($information);


echo $information [0]['surname'];
echo '<br>';
echo $information [0]['mobile'];
echo '<br>';
echo $information [1]['name'];
echo '<br>';
echo $information [1]['city'];
?>