<?php 
$pass = $_POST["password"];
$pass_strength = '';

$containsSmallLetter = preg_match('/[a-z]/', $pass);
$containsCapsLetter = preg_match('/[A-Z]/', $pass);
$containsDigit = preg_match('/\d/',$pass);
$containsSpecial = preg_match('/[^a-zA-Z\d]/',$pass);
//return ($containsSmallLetter && $containsCapsLetter && $containsDigit && $containsSpecial && strlen($string) > 12);


if ($containsSmallLetter && $containsCapsLetter && $containsDigit && $containsSpecial && strlen($pass) > 12){
    $pass_strength =  'Strong password.';
  }
else{
    $pass_strength = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
}

$result = [
    "pass" => hash("sha256", $_POST['password']),
    "pass_strength" => $pass_strength
];

echo json_encode($result);



?>