<?php
//tanpa null coalesting operator
$data=[
    "action" => "Create"
];

if (isset($data["action"])){
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

//dengan
$action1= $data["action"] ?? "Nothing";
echo $action1 . PHP_EOL;