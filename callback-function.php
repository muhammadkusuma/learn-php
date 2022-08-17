<?php

function sayHello(string $name, callable $filter){
    $finalName=call_user_func($filter, $name);
    echo "Hello $finalName".PHP_EOL;
}

sayHello("Wira", function ($name){return strtoupper($name);});
sayHello("Wira", fn($name)=>strtoupper($name));
sayHello("Wira", "strtoupper");
sayHello("Wira","strtolower");
