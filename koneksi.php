<?php
$mysqli = new mysqli("localhost","root","","db_penjualan");
if($mysqli->connect_error){
    die("Koneksi gagal :".$mysqli->connect_error);
}
?>