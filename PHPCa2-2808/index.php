<?php


$con = mysqli_connect('localhost', 'root', '', 'QLSV');
mysqli_set_charset($con, 'utf8');
if (!$con) {
    die('Error connect');
}

// $queryString = "INSERT INTO DMKHOA(MaKH, TenKhoa) VALUES('abc', 'Khoa test')";
// $result = mysqli_query($con, $queryString);

$queryString = "SELECT * FROM SinhVien";

$result = mysqli_query($con, $queryString);
$list = array();

while ($row = mysqli_fetch_assoc($result)) {
    $list[] = $row;
}
echo '<pre>';
var_dump($list);
echo '</pre>';
mysqli_close($con);

?>