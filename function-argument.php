<?php

function sayHello($name="Hamba Allah"){
    echo "Hello $name".PHP_EOL;
}

sayHello();
sayHello("Jakarta");

function sum(int $first, int $last){
    $total=$first+$last;
    echo "Total $first+$last=$total".PHP_EOL;
}

sum("100","100");
sum(100,100);
sum(true, false);
//sum([],[]);


//variable-length argument list
function sumAll(...$values){
    $total=0;
    foreach ($values as $value){
        $total+=$value;
    }
    echo "Total ".implode(" + ", $values). " = $total".PHP_EOL;
}


sumAll(10,20,30,40,50);
sumAll(...[10,20,30,40]);