<?php
include 'koneksi.php';

$kodesp= $_POST['kodesp'] ;
$nama= $_POST['nama'] ;
$perusahaan= $_POST['perusahaan'] ;
$telpsales=$_POST['telpsales'] ;
$telpkantor=$_POST['telpkantor'] ;
$email= $_POST['email'] ;  

$sql = "update supplier set nama ='$nama', perusahaan= '$perusahaan', 
telpsales = '$telpsales', telpkantor = '$telpkantor', email = '$email' where kodesp='$kodesp'";

mysqli_query($conn,$sql);


?>