<?php
$t = $_POST["title"];
$a = $_FILES["audio"];
$m = "audio/".$a["name"];

move_uploaded_file($a["tmp_name"],$m);

$i = $_FILES["image"];
$s = "image/".$i["name"];

move_uploaded_file($i["tmp_name"],$s);


$d = array(
		  "title" => $t,
    
	"audio" => "assets/".$m,	  
		
    "image" => "assets/". $s
		  
		  );

$j = file_get_contents('data.json');
$j = json_decode($j, true);


array_unshift($j, $d);

$j = json_encode($j);
file_put_contents("data.json",$j);


header("location:../profile.php");



?>