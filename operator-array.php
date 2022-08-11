<?php

$first=[
    "first_name"=> "Wira"
];

$last=[
    "last_name"=>"kusuma"
];

$full=$first+$last;
var_dump($full);


$a=[
    "first_name"=> "Wira",
    "last_name"=>"kusuma"
];

$b=[
    "last_name"=>"kusuma",
    "first_name"=> "Wira"
];

var_dump($a == $b);
var_dump($a === $b);