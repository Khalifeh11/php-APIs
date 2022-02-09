<?php

$password = $_GET["password"];
$hash = hash('sha256',$password);
$isThereAlphabet = false;
$isThereNumber = false;
$viable_password = false;

if (strlen($password) < 8){
    $viable_password = "password should consist of 8 letters at least";
}else{
    for ($i = 0; $i < strlen($password); $i++){
        if (ctype_digit($password[$i])){
            $isThereNumber = true;
        }
        if (ctype_alpha($password[$i])){
            $isThereAlphabet = true;
        }
    }

    if ($isThereAlphabet == true && $isThereNumber == true){
        $viable_password = true;
    }else{
        $viable_password = false;
    }

    
}

$array = ["viablePassword" => $viable_password, "hashed_password" => $hash];
$json = json_encode($array);
echo($json);

?>