<?php
$string = $_GET["string"];
$is_palindrome = false;

if (strlen($string) == 0){
    $is_palindrome = "Invalid Input";
}else if(strrev($string) == $string && strlen($string) != 0){
    $is_palindrome = true;
}else if(strrev($string) != $string && strlen($string) != 0){
    $is_palindrome = false;
}
$array = ["Palindrome" => $is_palindrome, "string" => $string];

$json = json_encode($array);

echo($json);

?>