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

$arr1 = array(1, 4, 6, 10);
$average = baitap2($arr1);
echo 'Trung binh cong cac phan tu trong mang la: ' . $average . '<br/>';

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

$thang = 12;
$result3 = baiTap3($thang, 2020);
if ($result3 == -1) {
    echo 'thang khong hop le';
} else {
    echo 'so ngay trong thang '. $thang .' la: ' . $result3;
}

// function baitap4($ngay, $thang, $nam)
// {
//     if (ngay cuoi cua nam) {
//         return 
//     } else {
//         if ($ngay == baitap3($ngay, $thang)) {
//             return 
//         } else {

//         }
//     }
// }


?>