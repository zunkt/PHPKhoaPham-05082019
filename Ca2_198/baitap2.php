<?php

$myArray = array(30, 5, 10, 15, 14, 13, 8, 7, 9, 20);

//cau 1
echo 'In cac phan tu trong mang: ';
foreach ($myArray as $item) {
    echo $item . ' ';
}

//cau 2
echo '<br/>In cac phan tu trong mang: ';
$size = count($myArray);
for ($i = $size - 1; $i >= 0; $i--) {
    echo $myArray[$i] . ' ';
}

//cau 3
echo '<br/>Tinh tong cac phan tu trong mang: ';
$tong = 0;
foreach ($myArray as $item) {
    $tong += $item;
}
echo $tong;

//cau 4
echo '<br/>Tinh tong cac phan tu le trong mang: ';
$tong = 0;
foreach ($myArray as $item) {
    if ($item % 2 == 1) {
        $tong += $item;
    }
}
echo $tong;

//cau 5
echo '<br/>in ra phan tu co gia tri lon nhat trong mang: ';
$max = $myArray[0];
foreach ($myArray as $item) {
    if ($item > $max) {
        $max = $item;
    }
}
echo $max;

//cau 6
echo '<br/>in ra phan tu co gia tri lon thu hai trong mang: ';
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

?>