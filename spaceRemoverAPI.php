<?php

function removeSpaces($string){
    $new_word = ["word" => trim($string)];
    return json_encode($new_word);
}

?>