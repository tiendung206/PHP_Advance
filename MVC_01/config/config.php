<?php
$host = 'localhost';
$user = 'root';
$pass = '12345678';
$database = 'news';
$conn = mysqli_connect($host,$user,$pass,$database);

if(!$conn){
    echo 'Khong the ket noi duoc den MySQL!';die;
}

include_once 'function.php';
?>