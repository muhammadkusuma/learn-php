<?php

$name= "M. Wira Ade Kusuma";

echo "Nama : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

//konversi string ke number dan sebaliknya
$valueString =(string)100;
var_dump($valueString);

$valueInt=(int)"100";
var_dump($valueInt);

$valueFloat=(float)"1.01";
var_dump($valueFloat);

//mengakses karakter
$name="Wira";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;

//variable parsing
$name="Wira";
echo "Hello $name, Selamat Belajar". PHP_EOL;

//curly brace
$var = "var";
echo "This is Mr.{$var}'s" . PHP_EOL;