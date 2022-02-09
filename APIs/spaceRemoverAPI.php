<?php
header("Access-Control-Allow-Origin: *");


$string = $_GET["string"];
if (strlen($string) == 0){
    $new_word = "Invalid input";
}else{
    $new_word = trim($string);
}
$array = ["string" => $string, "newString" => $new_word];
$json = json_encode($array);
echo($json);
?>