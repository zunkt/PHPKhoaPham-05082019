<?php

    if (isset($_POST['btnCong'])) {
        if ($_POST['mauso1'] == 0 || $_POST['mauso2'] == 0) {
            $ketqua = false;
        } else {
            $tuso = $_POST['tuso1'] * $_POST['mauso2'] + $_POST['tuso2'] * $_POST['mauso1'];
            $mauso = $_POST['mauso1'] * $_POST['mauso2'];
            $ketqua = $tuso / $mauso;
            if (is_float($ketqua)) {
                $ketqua = $tuso . '/' . $mauso;
            }
        }
        
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Demo  phan so</title>
    <style>
    	.input {
        	width: 30px;
      }
    </style>
</head>
<body>

<h2>Thực hiện phép tính phân số:</h2>

<form method="POST" action="">
  Phân số 1:<br/>
  <input class="input" type="text" name="tuso1">
  /
  <input class="input" type="text" name="mauso1">
  <br/>
  Phân số 2:<br/>
  <input class="input" type="text" name="tuso2">
  /
  <input class="input" type="text" name="mauso2">
  <br/>
  <b>Chọn phép tính cần thực hiện:</b><br/>
  <input type="submit" name="btnCong" value="cộng">
  <input type="submit" name="btnTru" value="trừ">
  <input type="submit" name="btnNhan" value="nhân">
  <input type="submit" name="btnChia" value="chia">
</form>
<?php
    if (isset($ketqua)) {
        if ($ketqua == false) {
            echo 'Thông tin bạn nhập đã sai! Mời nhập lại!';
        } else {
            echo 'Ket qua cua phep tinh: ' . $ketqua;
        }
        
    }
?>


</body>
</html>
