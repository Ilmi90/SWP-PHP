<?php

$student = array (

array (
'ime'=>'Pero',
'prezime'=>'Ramadani',
'email'=>'p@p.com',

	),

array (

'ime'=>'Janko',
'prezime'=>'Jankovski',
'email'=>'j@j.com',

	),

array (

'ime'=>'Boshko',
'prezime'=>'Boshkovski',
'email'=>'b@b.com',

	)
);

// print_r($student)

$max_ime = 100;
$ime ='';
$min_prezime = 0;
$prezime ='';

foreach ($student as $ardi) {

	if(strlen($ardi['ime']) < $max_ime) {
		$ime = $ardi['ime'];
		$max_ime = strlen($ardi['ime']);
	}
	if(strlen($ardi['prezime']) > $min_prezime){

		$min_prezime = strlen($ardi['prezime']);
		$prezime = $ardi ['prezime'];
	}
}

echo "Najkratko ime:" .$ime;
echo "<br/>";
echo "Najdolgo prezime:" .$prezime;
?>