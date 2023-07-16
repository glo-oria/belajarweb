<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'sekolah';

$condb = new mysqli($host, $username, $password, $db);

if(!$condb){
    die("Tidak dapat terkoneksi ke Database!". $condb->error);
}else{
   // echo "Koneksi Berhasil!";
}

?>