<?php

//tanpa
$names=["M.","Wira","Ade","Kusuma"];
for ($i=0;$i<count($names);$i++){
    echo "Hello $names[$i]" . PHP_EOL;
}

//dengan
foreach ($names as $name){
    echo "Hello $name" . PHP_EOL;
}

$person=[
  "first_name"=>"M. Wira",
  "middle_name"=>"Ade",
  "last_name"=>"Kusuma"
];

foreach ($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}