<?php
include 'koneksi.php';
$sql = "select * from karyawan";
$hasil =  mysqli_query($conn,$sql);
?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Headings-->
                    
                    <!-- DataTales Example -->
                    <div class="shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row p-3 flex justify-content-between">
                                <h4 class="m-0 font-weight-bold text-primary">Karyawan</h4>
                                    <button 
                                        type="button"
                                        class="btn btn-success" 
                                        id="btnTambahKary" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#modalAddKaryawan"
                                        >Tambah</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr >
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Telepon</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                    <?php                                        
                                    if(mysqli_num_rows($hasil)>0)
                                    {
                                        while($isi=mysqli_fetch_assoc($hasil))
                                        {
                                            echo '<tr><td>';
                                            echo $isi["kodekar"];
                                            echo '</td><td>';
                                            echo $isi["namakar"];
                                            echo '</td><td>';
                                            echo $isi["jabatan"];
                                            echo '</td><td>';
                                            echo $isi["telp"];
                                            echo '</td><td>';
                                            echo $isi["email"];
                                            echo '</td><td>';
                                            echo $isi["password"];
                                            echo '</td><td>';
                                            echo '<button class="btnUpdateKaryawan btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalUpdateKaryawan">U</button>';
                                            echo '</td></tr>'; 
                                        }
                                    }
                                    ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Modal Tambah Barang-->
    <div class="modal fade" id="modalAddKaryawan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddKaryawan" aria-hidden="true">
        <div  class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Karyawan</h1>
            <button type="button" class="btn-warning" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <div id="formKaryawan">
                    <form target="_blank" method="post" autocomplete="on">
                        
                        <label for="kode" class="form-label">Kode:</label>
                        <input type = "text" id="kodekaradd"  class="form-control">
                        
                        <label for="nama" class="form-label">Nama:</label>
                        <input type = "text" id="namakaradd" class="form-control"><br>
                        
                        <label for="jabatan" class="form-label">Jabatan:</label>
                        <input type = "text" id="jabatanadd" class="form-control"><br>
                        
                        <label for="telepon" class="form-label">Telepon:</label>
                        <input type = "text" id="teleponadd" class="form-control"><br>

                        <label for="email" class="form-label">Email:</label>
                        <input type = "text" id="emailadd" class="form-control"><br>
                    
                        <label for="password" class="form-label">Password:</label>
                        <input type = "text" id="passwordadd" class="form-control"><br><br>
                    </form>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="save" >Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
                <!-- <button type="button" class="btn btn-success" data-bs-dismiss="modal" name="save" id="save" >Save</button> -->
            </div>
        </div>
        </div>
    </div>
    <!-- ---------------------------- -->

    <!-- Modal Update Barang-->
    <div class="modal fade" id="ModalUpdateKaryawan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div  class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Karyawan</h1>
            <button type="button" class="btn-warning" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <div id="formKaryawan">
                <form action="tugas1tabelbarang.html" target="_blank" method="post" autocomplete="on">
                        <div>
                            <label for="kode" class="form-label">Kode:</label>
                            <input type = "text" id="kodekar"  readonly class="form-control">
                        </div>
                        
                        <label for="nama" class="form-label">Nama:</label>
                        <input type = "text" id="namakar" class="form-control"><br>
                        
                        
                        <label for="satuan" class="form-label">Jabatan:</label>
                        <input type = "text" id="jabatan" class="form-control"><br>
                        
                        <label for="hargabeli" class="form-label">Telepon:</label>
                        <input type = "text" id="telp" class="form-control"><br>

                        <label for="hargajual" class="form-label">Email:</label>
                        <input type = "text" id="email" class="form-control"><br>

                        <label for="hargajual" class="form-label">Password:</label>
                        <input type = "text" id="password" class="form-control"><br><br>
                </form>
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="delete" >Delete</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="update" >Update</button>
                </div>
        </div>
        </div>
    </div>
    </div>
    <!-- ---------------------------- -->

    <!-- Logout Modal-->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>
<script>
       $(document).ready(function () {        
       $('#save').click(function () {
        var kd = $('#kodekaradd').val();
        var nm = $('#namakaradd').val();
        var jb = $('#jabatanadd').val();
        var tl = $('#teleponadd').val();
        var em = $('#emailadd').val();
        var ps = $('#passwordadd').val();
        console.log(kd);
       $.post("simpankaryawan.php",{kodekar:kd,namakar:nm,jabatan:jb,
        telp:tl,email:em, password:ps
        },function(data,status)
       {
         alert("sukses");    
         $('#isi').load("tabelkaryawan.php");
       });
          });


        $('#update').click(function () {
        var kd = $('#kodekar').val();
        var nm = $('#namakar').val();
        var jb = $('#jabatan').val();
        var tl = $('#telp').val();
        var em = $('#email').val();
        var ps = $('#password').val();
        console.log(kd);
       $.post("ubahkaryawan.php",{kodekar:kd,namakar:nm,jabatan:jb,
        telp:tl,email:em, password:ps
        },function(data,status)
       {
         alert("sukses");    
         $('#isi').load("tabelkaryawan.php");
       });
          });


        $('#delete').click(function () {
        var kd = $('#kodekar').val();
        var nm = $('#namakar').val();
        var jb = $('#jabatan').val();
        var tl = $('#telp').val();
        var em = $('#email').val();
        var ps = $('#password').val();
        console.log(kd);
       $.post("hapuskaryawan.php",{kodekar:kd,namakar:nm,jabatan:jb,
        telp:tl,email:em, password:ps
        },function(data,status)
       {
         alert("sukses");    
         $('#isi').load("tabelkaryawan.php");
       });
          });

          $("#dataTable").on("click", ".btnUpdateKaryawan", function () {
           // $("#kodebr").val("tess");
            let closestTR = $(this).closest("tr").children(0);
			let kodekar = closestTR.eq(0).text();
			let namakar = closestTR.eq(1).text();
			let jabatan = closestTR.eq(2).text();
			let telp = closestTR.eq(3).text();
            let email = closestTR.eq(4).text();
			let password = closestTR.eq(5).text();

			$("#kodekar").val(kodekar);
			console.log($("#kodekar").val());

			// ambil value (id) dari select
			let currentSelect = $(this);
			let id = currentSelect.val();

			$("#namakar").val(namakar);
			$("#jabatan").val(jabatan);
			$("#telp").val(telp);
            $("#email").val(email);
            $("#password").val(password);

        });
        
        
        });



    </script>

