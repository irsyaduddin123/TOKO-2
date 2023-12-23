<?php
include 'koneksi.php';

$kodesp=$_POST['kodesp'];

$sql = "delete from supplier where kodesp ='".$kodesp."'";
mysqli_query($conn,$sql);
?>