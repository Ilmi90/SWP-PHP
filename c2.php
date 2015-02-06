<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<form action="c2.php" method="get">
	<input type="text" name="ime">
	<input type="text" name="prezime">
	<button type="submit">Pozdrav!</button>
</form>
<?php 

echo "Zdravo " .$_GET["ime"]." ".$_GET["prezime"]."!";

?>

</body>
</html>