<?php
header("Access-Control-Allow-Origin: *");


$password = $_GET["password"];
$hash = hash('sha256',$password);
$isThereAlphabet = false;
$isThereNumber = false;
$viable_password = false;

if (strlen($password) < 8){
    $viable_password = false;
}else{
    for ($i = 0; $i < strlen($password); $i++){
        if (ctype_digit($password[$i])){
            $isThereNumber = true;
            break;
        }
    }

    for ($i = 0; $i < strlen($password); $i++){
        if (ctype_alpha($password[$i])){
            $isThereAlphabet = true;
            break;
        }

    }
}
if ($isThereAlphabet == true && $isThereNumber == true){
    $viable_password = true;
}

$array = ["viablePassword" => $viable_password, "hashed_password" => $hash];
$json = json_encode($array);
echo($json);

?>