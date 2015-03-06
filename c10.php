<?php

// for(/*start*/; /*kraj*/; chekor) {

// 	// kod 
// }



// Te gjithat jane te njejta per cdonjeren do kete ritje me 1; (zgolemuvanje za 1)
// $i = $i + 1;
// $i += 1;
// $i++;


// for ($i=0; $i < 10; $i++) {

// 	echo $i;
// 	echo"<br>";

// } 




// FOR LOOP EXAMPLES !!!

// for ($i=10; $i < 100; $i += 2) {

// 	echo $i;
// 	echo "<br>";
// }


// echo "<br>";

// for ($i=-8; $i < 16; $i += 3) {

// 	echo $i;
// 	echo "<br>";
// }

// echo '<br>';

// for ($i=20; $i < 22; $i++) {

// 	echo $i;
// 	echo "<br>";
// }

// echo '<br>';

// for ($i=90; $i < 111; $i+=8) {

// 	echo $i;
// 	echo "<br>";
// }

// echo '<br>';

// for ($i=0; $i > -11; $i-=2) {

// 	echo $i;
// 	echo "<br>";
// }


// FOR LOOP EXAMPLES !!!

echo "<br>";

for ($i=0; $i < 30; $i++) {

	if($i % 2 == 0) {

	echo $i;
	echo "<br>";
		
	}

}

echo "<br>";

$broj = 0;

for ($i = 10; $i < 50; $i++) {

	$broj = $broj + $i;
	 // $broj += $i;
	
}
	
	echo $broj;

	echo "<br>";



$niza = array ();

for ($i=10; $i < 20; $i++) {

	$niza [] = $i;

	}

	
	print_r($niza);

?>

