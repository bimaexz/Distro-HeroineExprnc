<?php
$koneksi = mysqli_connect("localhost","root","","heroineexprnc");
if (!$koneksi){
    die("Koneksi Error : ".mysqli_connect_errno());
}
?>