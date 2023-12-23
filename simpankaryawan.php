<?php
include 'koneksi.php';
$kodekar= $_POST['kodekar'] ;
$namakar= $_POST['namakar'] ;
$jabatan= $_POST['jabatan'] ;
$telp=$_POST['telp'] ;
$email= $_POST['email'] ; 
$password= $_POST['password'] ; 
$sql = "insert into karyawan values('$kodekar','$namakar','$jabatan','$telp','$email','$password')";
mysqli_query($conn,$sql);

?>