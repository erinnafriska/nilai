<?php
$host = 'localhost';
$userdb = 'root';
$passdb = '';
$db = 'nilai';

//Procedur Style
$con = mysqli_connect($host, $userdb, $passdb, $db); 
//check connection
if (mysqli_connect_errno()) {
    echo "Kesalahan pada koneksi MySQL: " . mysqli_connect_error();
    exit();
}

//Object-oriental
//$con = new mysqli_connect($host, $userdb, $passdb, $db);
// if ($mysqli -> connect_errno) {
//      echo "Failed to connect to MySQL: " . $mysqli -> connect_error:
//    exit();
// }
?>