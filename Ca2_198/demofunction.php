<?php

$x = 10;
function addNumber(&$i, $j = 0) 
{
    $sum = $i + $j;
    $i++;
    echo $i . '<br/>';
    echo $sum . '<br/>';
}

function addNumber2($i, $j) 
{
    $sum = $i + $j;
    $result = array($sum, 1);
    return $result;
}
// $sum = addNumber2(1,2);
// echo $sum;


addNumber2(1,2);
// echo $tong;

// addNumber(1, 2);
// addNumber(3, 4);
// addNumber(4, 5);
// $i = 10;
// $number2 = 20;
// addNumber($i, $number2);
// echo $i;

// function demo()
// {
//     static $a = 0;
//     $a++;
//     echo $a;
// }

// demo();
// demo();

?>