<?php

function sayHello(){
    echo "Hello Function". PHP_EOL;
}

sayHello();
sayHello();

$buat=true;

if ($buat){
    function hi(){
        echo "hi".PHP_EOL;
    }
}

hi();