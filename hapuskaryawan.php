<?php
include 'koneksi.php';

$kodekar=$_POST['kodekar'];
$sql = "delete from karyawan where kodekar ='".$kodekar."'";
mysqli_query($conn,$sql);