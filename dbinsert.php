<?php 

$dsn = "mysql:dbname=koledz;host=127.0.0.1";
$username="root";
$password="";

$db = new PDO ($dsn, $username, $password);

$sql="insert into studenti (ime, prezime, koledz_id) values ('".$_POST
['ime']."', '".$_POST ['prezime']."',".$_POST['koledz_id'].")";

$query = $db->query($sql);

header("location: db1.php");

?>