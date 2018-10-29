<?php session_start();

$name=$POST["fname"];

$name=$POST["lname"];
//echo $name;
$email=$POST["email"];
//echo $email;
$user=$POST["user"];
//echo $user;
$pw=$POST["pw"];
//echo $pw;

$a = array(

"fname" => $fname,
"lname" => $lname,
    "email" => $email,
"user" => $user,
    "pw" => $pw 


);

$d = file_get_contents('data.json');
$d = json_decode($d, true);


array_push ($d, $a);
$x = count($d)-1;

$d = json_encode($d);
file_put_contents('data.json', $d);
header("location:../register.php".$x);
?>

