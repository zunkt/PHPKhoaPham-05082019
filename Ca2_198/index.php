<?php
    $i = 101; 
    // while ($i <= 100) {
    //     echo 'hello world';
    //     $i++;
    // }
    // do {
    //     echo 'hello world';
    //     $i++;
    // } while ($i <= 100)
    
    // for ($i = 1; $i <= 100; $i++) {
    //     echo 'hello world';
    //     echo 'hello 2';
    // }

    $students = array(
        '1' => 'Nguyen Van A',
        '2' => 'Nguyen Van B',
        '3' => 'Nguyen Van C',
    );
    // echo count($students);
    $size = count($students);
    // for ($i = 0; $i < $size; $i++) {
    //     echo $students[$i];
    // }
    foreach ($students as $key => $item) {
        echo $key . '-' .  $item;
    }
    // print_r($students);
    // echo $students[1];
    // var_dump($students[4]);
    // var_dump($students[4][0]);
    // $products = array(
    //     'products1' => array(
    //         'name' => array(),
    //         'price' => 500,
    //     ),
    //     'nguyen van a',
    //     'products2' => array(
    //         'name' => array(),
    //         'price' => 500,
    //     ),
    //     'nguyen van a',
    // );
    // echo '<pre>';
    // var_dump($products);
    // echo '</pre>';
    $list = array(1,2,3,4,5,6);
?>