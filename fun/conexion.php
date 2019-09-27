<?php 
 header('Content-Type: text/html; charset=utf-8');

$host = 'db5000105152.hosting-data.io';
$usuario = 'dbu134236';
$password = 'VHVt!JF-BdWJ8Wk';
$base = 'dbs99639';

$conn = mysqli_connect($host, $usuario, $password, $base);
$conn->set_charset("utf8"); 
mysqli_query($conn,"SET CHARACTER SET 'utf8'");
mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");

if (mysqli_connect_errno()){        
        echo json_encode("{'Connection Not Executed':'".mysqli_connect_error()."'}");
        exit();
} 
 ?>