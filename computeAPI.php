<?php

$x = $_GET["x"];
$y = $_GET["y"];


$calculation = ["compute" => 2 * $x + $y % 2];

echo(json_encode($calculation));


?>

