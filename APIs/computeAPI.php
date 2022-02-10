<?php

header("Access-Control-Allow-Origin: *");

$x = $_GET["x"];
$y = $_GET["y"];

$equation = "Invalid";

if (strlen($x) == 0 AND (strlen($y) == 0)){
    $x = "Invalid";
    $y = "Invalid";
}else if(strlen($y) == 0 AND (strlen($x) != 0)){
    $y = "Invalid";
    $x = $_GET["x"];
}else if(strlen($y) != 0 AND (strlen($x) == 0)){
    $x = "Invalid";
    $y = $_GET["y"];
}
else{
    $equation = 2 * $x + $y % 2;
}


$calculation = ["compute" => $equation, "x" => $x, "y" => $y];
$json = json_encode($calculation);

echo($json);


?>

