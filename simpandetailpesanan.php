<?php
include 'koneksi.php';
$kodeps= $_POST['kodeps'] ;
$kodebr= $_POST['kodebr'] ;
$hargabeli= $_POST['hargabeli'] ;
$jumlah=$_POST['jumlah'] ;

$sql = "insert into detailpesanan values
('$kodeps','$kodebr',$hargabeli,$jumlah)";
mysqli_query($conn,$sql);

?>
