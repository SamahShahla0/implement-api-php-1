<?php

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

//a^3 + b*c - a/b.
$expression = ($a**3) + ($b*$c) - ($a / $b);
$result = [
    "a" => $a,
    "b" => $b,
    "c" => $c,
    "expression" => $expression
];

echo json_encode($result);

?> 