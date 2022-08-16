<?php

$counter=1;

while($counter <=10){
    echo "Hello While Loop ke-$counter " . PHP_EOL;
    $counter++;
}

//alternatif syntax
$counter1=1;
while($counter1 <=10):
    echo "Hello While Loop ke-$counter1 " . PHP_EOL;
    $counter1++;
endwhile;