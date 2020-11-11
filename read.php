<?php

function readFromConsole()
{
    $array = array();
    $continue = "y";

    while (true)
    {
        switch ($continue)
        {
            case "y":
                echo "Введите число";
                $input = trim(fgets(STDIN));
                if (is_numeric($input)){
                    array_push($array, $input);
                }
                else {
                   echo  "укк". "\n";
                }
                echo "Продолжить Ввод y/n" . PHP_EOL;
                $continue = trim(fgets(STDIN));
                break;
            case "n":
                return $array;
                defult:
                echo "апа". "\n";
                echo "вар". "\n";
                $continue = trim(fgets(STDIN));
                break;
        }
    }
}
//function readFromConsole(string $question){
//    echo $question. ': ';
//    $input = trim(fgets(STDIN));
//
//    if ($input === 'true' || $input === 'false')
//    {
//        $input = (bool)$input;
//    }
//
//        else if (is_numeric($input))
//        {
//            $input = (string)$input;
//        }
//        else {
//            $input = (string)$input;
//        }
//        return $input;
//}