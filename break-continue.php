<?php
//break
$counter=1;
while (true){
    echo  "Hello break ke$counter" . PHP_EOL;
    $counter++;

    if($counter>10){
        break;
    }
}

//continue
for ($counter=0; $counter<=100;$counter++){
    if ($counter%2==0){
        continue;
    }
    echo "Hello Continue" . $counter . PHP_EOL;
}