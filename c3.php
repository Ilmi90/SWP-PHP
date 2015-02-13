<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<form action="c3.php" method="post">
	Username: <br>
	<input	type="text" name ="username"> <br>
	Password: <br>
	<input type ="password" name="password"> <br>
	Age: <br>
	<input type="number" min="1" name="age"><br>
	Gender: <br>
	<label for="gm">
	Male
	<input type="radio" name="gender" value="male" id="gm">
	</label> <br>
	<label for="gf">
	Female
	<input type="radio" name="gender" value="female" id="gf">
	</label> <br>
	<label for="go">
	Other
	<input type="radio" name="gender" value="other" id="go">
	</label> <br>
	Hair color:
	<input	type="color" name="hair"> <br>
	Date of birth: <br>
	<input type="date" name="birthday"> <br>
	Food I like: <br>
	<label for="f1">
	Pizza
	<input type="checkbox" name="food[]" value="pizza" id="f1">
	</label> <br>
	<label for="f2">
	Barbecue
	<input type="checkbox" name="food[]" value="bbq" id="f2">
	</label> <br>
	<label for="f3">
	Burek
	<input type="checkbox" name="food[]" value="burek" id="f3">
	</label> <br>
	<label for="f4">
	Spaghetti
	<input type="checkbox" name="food[]" value="spaghetti" id="f4">
	</label> <br>
	<label for="f5">
	Salad
	<input type="checkbox" name="food[]" value="salad" id="f5">
	</label> <br>
	<label for="f6">
	More salad!
	<input type="checkbox" name="food[]" value="moresalad" id="f6">
	</label> <br>
	Country: <br>
	<select name="country">
	<option value="mk">Macedonia</option>
	<option value="sk">Slovakia</option>
	<option value="sw">Sweden</option>
	<option value="de">Germany</option>
	<option value="fr">France</option>
	<option value="zb">Zimbabwe</option>
	<option value="gb">Great Britain</option>
	<option value="nk">North Korea</option>
	<option value="bo">Bolivia</option>
	<option value="it">Italy</option>
	<option value="ir">Ireland</option>
	</select> <br>

	<button type="submit">Submit</button>
</form>
<?php
	print_r($_POST);
	?>
	<hr>
	username:
	<?=$_POST["username"];?> <br>
	password:
	<?=$_POST["password"];?><br>
	age:
	<?=$_POST["age"];?> <br>
	gender:
	<?=$_POST["gender"];?> <br>
	hair:
	<?=$_POST["hair"];?> <br>
	birthday:
	<?=$_POST["birthday"];?><br>

	<?php print_r($_POST["food"]);?><br>
	country:
	<?=$_POST["country"];?>
	

</body>
</html>