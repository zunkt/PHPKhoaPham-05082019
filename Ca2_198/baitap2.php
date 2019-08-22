<?php

$myArray = array(30, 5, 10, 15, 14, 13, 8, 7, 9, 20);

//cau 1
echo 'In cac phan tu trong mang: ';


function baitap1($myArray)
{
    foreach ($myArray as $item) {
        echo $item . ' ';
    }
}

baitap1($myArray);

//cau 2
echo '<br/>In cac phan tu trong mang: ';


function baitap2($myArray)
{
    $size = count($myArray);
    for ($i = $size - 1; $i >= 0; $i--) {
        echo $myArray[$i] . ' ';
    }
}

baitap2($myArray);



//cau 3
echo '<br/>Tinh tong cac phan tu trong mang: ';


function baitap3($myArray)
{
    $tong = 0;
    foreach ($myArray as $item) {
        $tong += $item;
    }
    echo $tong;
}

baitap3($myArray);

//cau 4
echo '<br/>Tinh tong cac phan tu le trong mang: ';
$tong = 0;
foreach ($myArray as $item) {
    if ($item % 2 == 1) {
        $tong += $item;
    }
}
echo $tong;

function baitap4($myArray)
{
    $tong = 0;
    foreach ($myArray as $item) {
        if ($item % 2 == 1) {
            $tong += $item;
        }
    }
}

baitap4($myArray);

//cau 5
echo '<br/>in ra phan tu co gia tri lon nhat trong mang: ';


function baitap5($myArray)
{
    $max = $myArray[0];
    foreach ($myArray as $item) {
        if ($item > $max) {
            $max = $item;
        }
    }
    echo $max;
}

baitap5($myArray);



//cau 6
echo '<br/>in ra phan tu co gia tri lon thu hai trong mang: ';


function baitap6($myArray)
{
    $max = $myArray[9];
    foreach ($myArray as $item) {
        if ($item > $max) {
            $max = $item;
        }
    }
    if ($max == $myArray[0]) {
        $max2 = $myArray[1];
    } else {
        $max2 = $myArray[0];
    }
    
    foreach ($myArray as $item) {
        if ($item > $max2 && $item != $max) {
            $max2 = $item;
        }
    }
    echo $max2;
}

baitap6($myArray);

?>