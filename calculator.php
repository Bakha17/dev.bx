<?php

require_once ('read.php');

/*
 * @test 1 + 2 = 4
 * @test 2 * 2 = 4
 * @test 4 - 4 = 0
 * @test 1 / 2 = 0.5
 * @test 2 / 0 = false
 * @test 1 / dsf = 4
 * @test два + два = false
 *
 *
 */

function(){

$result =  calculate(a:1,b:2,action:'+');
echo 'Результат: '. '1 + 2 ='. $result . ($result === 3 ? ' passed' : 'failed');
    }