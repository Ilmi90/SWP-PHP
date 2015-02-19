<?php

$number = $_POST ["number"];

if($number % 2 == 0)  {

    echo "Number is divided by 2";
  
  } else {
    	echo "Number is NOT divided by 2";
    }

if($number % 3 == 0)  {

    echo " and is divided by 3";
  
  } else {
    	echo " and is NOT divided by 3";
    }
?>



