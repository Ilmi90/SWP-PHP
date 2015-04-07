<?php

$predmet = array (

array (
'predmet'=>'Matematika',
'brojnastudenti'=>'12',

	),

array (

'predmet'=>'Fizika',
'brojnastudenti'=>'18',

	),

array (

'predmet'=>'Programiranje',
'brojnastudenti'=>'32',

	),

array (

'predmet'=>'Hemija',
'brojnastudenti'=>'4',

	)
);

$sum = 0;

foreach ($predmet as $predmeti) {

	$sum+=$predmeti['brojnastudenti'];
}

echo 'Sredna vrednost na zapishani studenti po predmet:' .$sum / count($predmet);
?>