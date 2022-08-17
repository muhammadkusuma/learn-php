<?php

$sayHello=function (string $name){
    echo "Hello $name".PHP_EOL;
};

$sayHello("Wira");
$sayHello("budi");



//anonymous function sebagai argument
function sayGoodBye(string $name, $filter){
    $finalName=$filter($name);
    echo "Good Bye $finalName".PHP_EOL;
}
sayGoodBye("Wira", function (string $name):string{
    return strtoupper($name);
});

//mengakses variable luar
$firstName="Wira";
$lastName="Kusuma";

$sayHelloWira=function () use($firstName, $lastName){
    echo "Hello $firstName $lastName".PHP_EOL;
};
$sayHelloWira();