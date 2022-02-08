<?php

function API1compute($x, $y){
    $calculation = ["compute" => 2 * $x + $y % 2];
    return json_encode($calculation);
}

function Palindrome($string){
    if (strrev($string) == $string){
        return json_encode(["is_palindrome"=>1]);
    }else{
        return json_encode(["is_palindrome"=>0]);
    }
    
}

function removeSpaces($string){
    $new_word = ["word" => trim($string)];
    return json_encode($new_word);
}

function isViablePass($password){
    $isThereNumber = false;
    $isThereAlphabet = false;
    if strlen($password) < 8{
        return json_encode(["Viable" => "no"]);
    }else{
        for ($i = 0; $i < strlen($password); $i++){
            if (ctype_digit($password[$i])){
                $isThereNumber = true;
            }
            if (ctype_alpha($password[$i])){
                $isThereAlphabet = true;
            }
            if ($isThereAlphabet == true && $isThereNumber == true){
                return json_encode(["Viable" => "yes"]);
            }
        }
        if ($isThereAlphabet == false || $isThereNumber == false){
            return json_encode(["Viable" => "no"]);
        }
    }
    
}



?>

