<?php

echo 'Nama :';
echo 'M. Wira Ade Kusuma';
echo "\n";

echo "Nama :";
echo "M.\t Wira\t Ade Kusuma\n";

echo <<<WIRA
heredoc
ini adalah contoh string yang sangat panjang
bisa pake "quote"

WIRA;

echo <<<'WIRA'
nowdoc
ini adalah contoh string yang sangat panjang
bisa pake "quote"
WIRA;
