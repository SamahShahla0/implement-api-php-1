<?php


$current_date = strtotime($_GET['date']);

$christmasDay = strtotime('25 December');

$days = ($christmasDay - $current_date)/60/60/24;

$result =[
    "Number of days left until christmas" => $days
];

echo json_encode($result);




?>