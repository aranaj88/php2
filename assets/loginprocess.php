<?php session_start(); 
$e = $_POST["email"];
//echo $e;
$p = $_POST["pw"];
//echo $p;
$_SESSION["account"] = $a = $_POST["account"];
//echo $a;
if ($a == 'physician'){
    $d = file_get_contents('data.json');
    $x = "location:../register.php";
};
$d = json_decode($d,true);
//print_r($d);
//echo "<br>";
foreach($d as $k => $v){
    //echo $e, $v['email'], $p, $v['pw'];
    //echo "<br>";
    if($e == $v['email'] && $p == $v['pw']){
        //echo 'match';
        $_SESSION["fname"] = $v["fname"];
        $_SESSION["lname"] = $v["lname"];
        $_SESSION["email"] = $v["email"];
        $_SESSION["user"] = $v["user"];
        $_SESSION["pw"] = $v["pw"];
        //echo $_SESSION["fname"];

    };
};
if(isset($_SESSION["email"])){
    header($x); 
}else{
 header("location:../login.php");   
};
?>
