<?php

//function sum(int $first, int $second){
//    return $first+$second;
//}
//return type declaration
function sum(int $first, int $second):int{
    return $first+$second;
}

$total =sum(10,10);
var_dump($total);

$total=sum(20,20);
var_dump($total);


function getFinalValue(int $value):string{
    if ($value>=80){
        return "A";
    }elseif ($value>=70){
        return "B";
    }elseif ($value>=60){
        return "C";
    }elseif ($value>=50){
        return "D";
    }else{
        return "E";
    }
}

$nilai=getFinalValue(88);
var_dump($nilai);