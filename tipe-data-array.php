<?php

$values=array(1,2,3,4);
var_dump($values);

$names=["Wira", "Ade", "Kusuma"];
var_dump($names);

var_dump($names[0]);
$names[0]="buid";
var_dump($names[0]);
unset($names[1]);
var_dump($names);

$names[]="John";
var_dump($names);

var_dump(count($names));

//map
$wira=array(
    "id"=>"wira",
    "name"=>"m. wira ade kusuma",
    "age"=>20,
    "address"=>[
        "city"=>"pekanbaru",
        "country"=> "indonesia"
    ]
);
var_dump($wira);

var_dump($wira["address"]["country"]);
