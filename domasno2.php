<?php 

$username = $_POST['username'];
$password = $_POST['password'];
$webpage ='#';

// admin password

if ($username == 'admin' AND $password =='password'){

	echo "you have logged in";

} else

// admin2 password2
if ($username == 'admin2' AND $password =='password2'){

	echo '<a href="$webpage">www.facebook.com</a>'.' <a href="$webpage">www.google.com</a>'.' <a href="$webpage">www.youtube.com</a>';


}else {

	echo "Incorrect username or passwrod";
}


?>