<?php
header("Access-Control-Allow-Origin: *");

$string = $_GET["string"];
$is_palindrome = false;

if (strlen($string) == 0){
    $is_palindrome = "Invalid";
}else if(strrev($string) == $string && strlen($string) != 0){
    $is_palindrome = true;
}

$array = ["palindrome" => $is_palindrome, "string" => $string];

$json = json_encode($array);

echo($json);

?>