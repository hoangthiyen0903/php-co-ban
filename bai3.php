<?php
$so_chia_het_cho_2 = 4 ;
echo 'Kiểu INT: ';
var_dump(4);
echo $so_chia_het_cho_2.'<br>';

$is_Ha = false;
$is_Ha2 = true;
echo 'Kiểu Boolean: ';
var_dump($is_Ha);
echo $is_Ha.'<br>';



echo 'Kiểu Boolean: ';
var_dump($is_Ha2);
echo $is_Ha2.'<br>';

$b = 3.333;
echo 'Kiểu Số Thực: '.$b.'<br>';

$c = 'Hello';
echo 'Kiểu Chuỗi: '.$c.'<br>';

$thanhvien = array(
    'name' =>'Nguyen Thi Hoa',
    'age' =>25
);
echo 'Kiểu Mảng (array): ';
print_r($thanhvien).'<br>';

$e = null;
echo 'Kiểu NULL'.$e .'<br>';


echo 'Kiểu Đối Tượng (object): ';
$obj= new stdClass();
$obj->name= 'Nguyen Thi Hoa';
$obj->age= 25;
echo '<pre>';
var_dump($obj);
