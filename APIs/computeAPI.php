<?php
header("Access-Control-Allow-Origin: *");
$x = $_GET["x"];
$y = $_GET["y"];

 
$equation = 2 * $x + $y % 2;
$calculation = ["compute" => $equation];
echo(json_encode($calculation));


?>

