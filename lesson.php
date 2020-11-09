<?php
function example () {
    echo 'Введите число a ';
    $a = readline();
    echo 'Введите число b ';
    $b = readline() . PHP_EOL;
    if (is_numeric($a)){
        echo 'Результат ' . $summ = $a + $b . PHP_EOL;
    }
    else if (is_numeric($b)){
        echo 'Результат ' . $summ = $a + $b . PHP_EOL;
    }
    else {
        echo 'Введите правильное значение';
    }

    echo 'Введите Y если хотите продолжить, N чтобы завершить ';
    $c = readline();
    return $c;
}


do {
    $c = example();
}
while ($c == 'Y');
