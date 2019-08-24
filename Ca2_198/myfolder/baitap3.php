<?php

include('./../myfunction.php');

$arr1 = array(1, 4, 6, 10);
$average = baitap2($arr1);
echo 'Trung binh cong cac phan tu trong mang la: ' . $average . '<br/>';


$thang = 12;
$result3 = baiTap3($thang, 2020);
if ($result3 == -1) {
    echo 'thang khong hop le';
} else {
    echo 'so ngay trong thang '. $thang .' la: ' . $result3;
}


$thang = 2;
$ngay = 29;
$nam = 20120;
$ngayketiep = baitap4($ngay, $thang, $nam);
echo "<br/> Ngày kế tiếp của $ngay/$thang/$nam là: $ngayketiep";


echo "<br/>";
$number = 1;
$ktSNT = baitap5($number);

if ($ktSNT) {
    echo "$number là số nguyên tố";
} else  {
    echo "$number không là số nguyên tố";
}


echo "<br/>";
$array6 = array(0, 1, 2, 4, 6, 10, 15, 17, 12);
$tong = baitap6($array6);
echo "Tong cac so nguyen to trong mang la: $tong";

echo "<br/>";
$array6 = array(0, 1, 2, 4, 6, 10, 15, 17, 12, 19);
$item = baitap7($array6);
echo "So chan cuoi cung trong mang la: $item";

echo "<br/>";
$array6 = array(0, 1, 14, 4, 6, 10, 15, 17, 12, 19);
$sochan = baitap8($array6);
echo "Cac so chan trong mang la: ";
foreach($sochan as $item) {
    echo $item . ' ';
}

echo "<br/>";
$array6 = array(0, 1, 14, 4, 6, 10, 15, 17, 12, 19);
$songuyentodautien = baitap9($array6);
echo "vi tri so nguyen to dau tien: $songuyentodautien";

echo "<br/>";
$array6 = array(0, 1, 14, 4, 6, 10, 15, 17, 12, 19, 10);
$number = 10;
$count = baitap10($array6, $number);
echo "So lan xuat hien cua $number: $count";

?>