<?php

//variable global scope
$name="Wira";
function sayName(){
    echo $name;
}
sayName();

//local scope
function sayName1(){
    $name="Wira";
    echo $name. PHP_EOL;
}
sayName1();

//global keyword
function sayName2(){
    global $name;
    echo $name. PHP_EOL;
}
sayName2();

//global variable
$GLOBALS;
var_dump($GLOBALS);

//static scope
function increment(){
    static $counter=1;

    echo "counter $counter".PHP_EOL;

    $counter++;
}

increment();
increment();
increment();