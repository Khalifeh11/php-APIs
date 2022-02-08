<?php

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

<?