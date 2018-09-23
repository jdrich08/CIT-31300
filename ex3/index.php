<?
ini_set('display_errors',1);
error_reporting(E_ALL);

function myLoad($class) {
  include_once('classes/'.strtolower($class).'.class.php');
}

spl_autoload_register('myLoad');


//$reg = new reg('Regular User','15');
//$admin = new admin('Administrator','27');

//$reg->first_name = 'Bob';
//$reg->last_name = 'Dole';
//$reg->email = 'bob_dole@gmail.com';

//$admin->first_name = 'King';
//$admin->last_name = 'Arthur';
//$admin->email = 'king_arthur@gamil.com';

//echo "User Level: ".$reg->user_level."<br/> User ID: "
//.$reg->user_id."<br/> User Type: ".$reg->user_type."<br/> First Name: "
//.$reg->first_name."<br/> Last Name: ".$reg->last_name."<br/> Email Adress: "
//.$reg->email."<br/>";

//echo "User Level: ".$admin->user_level."<br/> User ID: "
//.$admin->user_id."<br/> User Type: ".$admin->user_type."<br/> First Name: "
//.$admin->first_name."<br/> Last Name: ".$admin->last_name."<br/> Email Adress: "
//.$admin->email;

echo "<hr/>";
$testCalc = admin::calc(3,2);
echo $testCalc;
echo "<hr/>";

?>

<a href="registration.php">Register an Account</a>
