<?php

echo 'Введите число 1:';
$input = trim(fgets(STDIN));

if ($input == 'true' || $input == '1') {
    $input = true;
}
else if ($input == 'false' || $input == '0'){
    $input = false;
}

var_dump($input);