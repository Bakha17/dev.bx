<?php
function example () {
    echo 'Введите число a ';
    $a = readline();
    echo 'Введите число b ';
    $b = readline() . PHP_EOL;
    if (is_numeric($a) && is_numeric($b)){
        $summ = $a + $b;
        echo 'Результат ' . $summ . PHP_EOL;
    }

    else {
        echo 'Введите правильное значение' . PHP_EOL;
    }

    echo 'Введите Y если хотите продолжить, N чтобы завершить ';
    $c = readline();
    return $c;
}


do {
    $c = example();
}
while ($c == 'Y');
