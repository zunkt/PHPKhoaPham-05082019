<?php

//bai tap 1
echo 'Bai tap 1: In cac so tu 1 den 100: <br/>';
function baitap1()
{
    for ($i = 1; $i <= 100; $i++) {
        echo $i . ' ';
    }
}
baitap1();


//bai tap 2
echo '<br/>Bai tap 2: In cac so tu 100 den 1: <br/>';
function baitap2()
{
    for ($i = 100; $i >= 1; $i--) {
        echo $i . ' ';
    }
}

baitap2();


// bai tap 3
echo '<br/>Bai tap 3: tinh tong cac so tu 1 den 50:';


function baitap3()
{
    $tong = 0;
    for ($i = 1; $i <= 50; $i++) {
        $tong += $i; //$tong = $tong + $i;
    }
    echo $tong;
}

baitap3();

//bai tap 4
echo '</br>Bai tap 4: Tinh tong cac so chan tu 2 den n:';


function baitap4($n)
{
    $tong = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            $tong += $i;
        }
    }
    echo $tong;
}

baitap4(100);

//bai tap 5
echo '</br>Bai tap 5: Tinh n!: ';


function baitap5($n)
{
    $giaithua = 1;
    for ($i = 2; $i <= $n; $i++) {
        $giaithua *= $i;
    }
    echo $giaithua;
}

baitap5(10);



?>