<?php

$to_check = $_GET['to_check'];
$palindrome = false;

function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
 
if(Palindrome($to_check)){ 
    $palindrome = true;
}
else { 
    $palindrome = false;
}

$results = [
    "to_check" => $to_check,
    "palindrome" => $palindrome 
] ;

echo json_encode($results);

?> 