<?php

$name="wira";
$name=null;

$age=null;

echo "Name :";
echo $name;
echo "\n";

echo "Age :";
echo $age;
echo "\n";

echo "is name null? :";
var_dump(is_null($name));
echo "\n";

//menghapus variable
$contoh="wira";
unset($contoh);

var_dump(isset($contoh));