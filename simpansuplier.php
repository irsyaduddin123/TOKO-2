<?php
include 'koneksi.php';
$kodesp= $_POST['kodesp'] ;
$nama= $_POST['nama'] ;
$perusahaan= $_POST['perusahaan'] ;
$telpsales=$_POST['telpsales'] ;
$telpkantor=$_POST['telpkantor'] ;
$email= $_POST['email'] ;  

$sql = "insert into supplier values('$kodesp','$nama','$perusahaan','$telpsales','$telpkantor','$email')";
mysqli_query($conn,$sql);

?>