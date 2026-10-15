<?php 
$host='localhost';
$user='root';
$pass="";
$db='cafeku';
$port='3307';

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (mysqli_connect_error()) {
   echo 'ada error'. mysqli_connect_error();
}else{
   echo 'berhasil';
}
?>