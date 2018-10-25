<?php
$a = $_FILES["audio"];
$m = "audio/".a["name"];

move_uploaded_file($a["tmp_name"],$m);

$d = array(
		  
	"audio" => "assets".$m	  
		  
		  
		  );

$j = file_get_contents('data.json');
$j = json_decode($j, true);


array_unshift($j, $d);

$j = json_encode($j);
file_put_contents("data.json",$j);







?>