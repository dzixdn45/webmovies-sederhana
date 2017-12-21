<?php
ob_start();
 
$koneksi = mysql_connect("localhost","root","")
or die ("Gagal terhubung ke server MySQL");
mysql_select_db("alumni", $koneksi)
or die ("Gagal terhubung ke database");
?>