<?php 

$dsn = "mysql:dbname=koledz;host=127.0.0.1";
$username="root";
$password="";

$db = new PDO ($dsn, $username, $password);

$query = $db->query("select * from studenti");

$query -> execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);

// print_r($res);

?>

<table border="1">
 	<tr>
 		<th> id </th>
 		<th> ime </th>
 		<th> prezime </th>
 		<th> koledz_id </th>
 	</tr>
 	<?php foreach ($res as $row){ ?>

 	<tr>
 		<td><?php echo $row ['id']?></td>
 		<td><?php echo $row ['ime']?></td>
 		<td><?php echo $row ['prezime']?></td>
 		<td><?php echo $row ['koledz_id']?></td>
 	</tr>

 	<?php } ?>
 </table>

<hr>


<form method="post" action="dbinsert.php" >

Ime:<br>
<input type="text" name="ime">
<br>
Prezime:<br>
<input type="text" name="prezime"><br>

<select name="koledz_id">
	<option value="1">Web</option>
	<option value="2">Graphic</option>
</select><br>

<button type="submit"> Send </button>

</form>
	

