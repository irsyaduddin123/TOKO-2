<?php
include 'koneksi.php';

   $kodekar= $_POST['kodekar'] ;
   $namakar= $_POST['namakar'] ;
   $jabatan= $_POST['jabatan'] ;
   $telp=$_POST['telp'] ;
   $email= $_POST['email'] ;  
   $password= $_POST['password'] ;  
   
$sql = "update karyawan set namakar ='$namakar', jabatan= '$jabatan', 
telp = '$telp', email = '$email', password = '$password' where kodekar='$kodekar'";

mysqli_query($conn,$sql);


?>