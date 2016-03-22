<?php
error_reporting(E_ALL & E_NOTICE & E_WARNING);
$arr = file($argv[1]);


foreach($arr as $string){    
    list($sentence, $numbers) = explode(";", trim($string));
    $sentence = explode(" ", $sentence);    
    $numbers = array_map("intval", explode(" ", $numbers));
    
    $arrayAnswer = array();

    $count = count($sentence);
    for($i = 0; $i < $count; $i++){
        $vii = $numbers[$i];
        $arrayAnswer[$vii] = $sentence[$i];
    }    
    $missedKey = array_diff(range(1, $count), array_keys($arrayAnswer));
    $missedKey = array_values($missedKey);
    $arrayAnswer[$missedKey[0]] = $arrayAnswer[""];
    unset($arrayAnswer[""]);
    ksort($arrayAnswer);       
    $answer = implode(" ", $arrayAnswer);
    echo "$answer\n";
}
