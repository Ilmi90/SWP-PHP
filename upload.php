<?php


// print_r($_);

// How to upload:
if ('image/jpeg' == $_FILES ['slika']['type'] && 1024 * 1024 * 1024 > $_FILES['slika']['size'])

{

$od = $_FILES['slika']['tmp_name'];
$vo = 'uploads/'.$_FILES['slika']['name'];

move_uploaded_file($od, $vo);
	
}


?>