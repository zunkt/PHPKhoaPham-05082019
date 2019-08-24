<?php

function baitap2($myArray)
{
    $result = 0;
    foreach ($myArray as $item) {
        $result += $item;
    }
    $result = $result / count($myArray);
    return $result;
}

function namNhuan($nam)
{
    if ($nam % 4 == 0 && $nam %100 != 0) {
        return true;
    }
    return false;
}

function baiTap3($thang, $nam = 0)
{
    if (in_array($thang, array(1, 3, 5, 7, 8, 10, 12))) {
        return 31;
    } else if ($thang == 2) {
        if (namNhuan($nam)) {
            return 29;
        } else {
            return 28;
        }
    } else if ($thang == 4 || $thang == 6 ||$thang == 9 ||$thang == 11){
        return 30;
    } else {
        return -1;
    }
}

function baitap4($ngay, $thang, $nam)
{
    if ($ngay > baitap3($thang, $nam)) {
        echo "Ngay bi sai";
    } else {
        if ($ngay == 31 && $thang == 12) {
            $nam++;
            return "1/1/$nam";
        } else {
            if ($ngay == baitap3($thang, $nam)) {
                $thang++;
                return "1/$thang/$nam";
            } else {
                $ngay++;
                return "$ngay/$thang/$nam";
            }
        }
    }
    
}
function baitap5($number)
{
    if ($number == 2) {
        return true;
    } else if ($number <= 1) {
        return false;
    } else {
        $count = 0;
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
}


function baitap6($array5)
{
    $tong = 0;
    foreach($array5 as $item) {
        if (baitap5($item)) {
            $tong += $item;
        }
    }
    return $tong;
}
function baitap7($array7)
{
    $size = count($array7);
    for ($i = $size - 1; $i >= 0; $i--) {
        if ($array7[$i] % 2 == 0) {
            return $array7[$i];
        }
    }
    return -1;
}

function baitap8($array8)
{
    $sochan = array(); 
    foreach ($array8 as $item) {
        if ($item % 2 == 0) {
            $sochan[] = $item;
        }
    }
    return $sochan;
}
function baitap9($array9)
{
    foreach($array9 as $key => $item) {
        if (baitap5($item)) {
            return $key;
        }
    }
}
function baitap10($array9, $number)
{
    $dem = 0;
    foreach($array9 as $item) {
        if ($item == $number) {
            $dem++;
        }
    }
    return $dem;
}

?>