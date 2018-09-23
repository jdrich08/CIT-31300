<?php

function myLoad($class) {
  include_once('classes/'.strtolower($class).'.class.php');
}

spl_autoload_register('myLoad');

$reg = new reg('newuser','15');

$reg->first_name = $_POST["fname"];
$reg->last_name = $_POST["lname"];
$reg->email = $_POST["email"];

if(is_object($reg)) {
  echo "User registered. <br/>";
  echo "The registered user's first name is: ".$reg->first_name."<br/>";
  echo "The registered user's last name is: ".$reg->last_name."<br/>";
  echo "The registered user's email is: ".$reg->email."<br/>";
}
else {
  echo "User registration failed.";
}

?>
