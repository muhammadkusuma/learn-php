<?php

//for (;;){
//    echo "Hello For Loop" . PHP_EOL;
//}

for ($counter=1;$counter<=10;$counter++){
    echo "ini adalah for loop ke-$counter".PHP_EOL;
}

//alternative syntax
for ($counter=1;$counter<=10;$counter++):
    echo "ini adalah for loop ke-$counter".PHP_EOL;
endfor;