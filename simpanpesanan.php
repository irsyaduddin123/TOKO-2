<?php
include 'koneksi.php';

$kodeps= $_POST['kodeps'] ;
$tanggal= $_POST['tanggal'] ;
$karyawan= $_POST['karyawan'] ;
$supplier=$_POST['supplier'] ; 
$keterangan= $_POST['keterangan'] ; 
$total= $_POST['total'] ; 

$sql = "insert into masterpesanan values
('$kodeps','$tanggal','$karyawan','$supplier','$keterangan',$total)";
mysqli_query($conn,$sql);

?>


