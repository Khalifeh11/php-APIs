<?php
function Palindrome($string){
    if (strrev($string) == $string){
        return json_encode(["is_palindrome"=>1]);
    }else{
        return json_encode(["is_palindrome"=>0]);
    }
    
}


<?