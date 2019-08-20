<?php

//bai tap 1
echo 'Bai tap 1: In cac so tu 1 den 100: <br/>';
for ($i = 1; $i <= 100; $i++) {
    echo $i . ' ';
}

//bai tap 2
echo '<br/>Bai tap 2: In cac so tu 100 den 1: <br/>';
for ($i = 100; $i >= 1; $i--) {
    echo $i . ' ';
}

// bai tap 3
echo '<br/>Bai tap 3: tinh tong cac so tu 1 den 50:';
$tong = 0;
for ($i = 1; $i <= 50; $i++) {
    $tong += $i; //$tong = $tong + $i;
}
echo $tong;

//bai tap 4
echo '</br>Bai tap 4: Tinh tong cac so chan tu 2 den 50:';
$tong = 0;
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $tong += $i;
    }
}
echo $tong;

//bai tap 5
echo '</br>Bai tap 5: Tinh 20!: ';
$giaithua = 1;
for ($i = 2; $i <= 20; $i++) {
    $giaithua *= $i;
}
echo $giaithua;


?>