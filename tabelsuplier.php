<?php
include 'koneksi.php';
$sql = "select * from supplier";
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
                                <h4 class="m-0 font-weight-bold text-primary">Supplier</h4>
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
                                            <th>Perusahaan</th>
                                            <th>Telepon Sales</th>
                                            <th>Telepon Perusahaan</th>
                                            <th>Email</th>
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
                                            echo $isi["kodesp"];
                                            echo '</td><td>';
                                            echo $isi["nama"];
                                            echo '</td><td>';
                                            echo $isi["perusahaan"];
                                            echo '</td><td>';
                                            echo $isi["telpsales"];
                                            echo '</td><td>';
                                            echo $isi["telpkantor"];
                                            echo '</td><td>';
                                            echo $isi["email"];
                                            echo '</td><td>';
                                            echo '<button class="btnUpdateSupplier btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalUpdateSupplier">U</button>';
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
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Supplier</h1>
            <button type="button" class="btn-warning" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <div id="formKaryawan">
                    <form target="_blank" method="post" autocomplete="on">
                        
                        <label for="kode" class="form-label">Kode:</label>
                        <input type = "text" id="kodeadd"  class="form-control">
                        
                        <label for="nama" class="form-label">Nama:</label>
                        <input type = "text" id="namaadd" class="form-control"><br>
                        
                        <label for="jabatan" class="form-label">Nama Perusahaan:</label>
                        <input type = "text" id="perusahaanadd" class="form-control"><br>
                        
                        <label for="telepon" class="form-label">Telepon Supplier:</label>
                        <input type = "text" id="teleponsupadd" class="form-control"><br>

                        <label for="telepon" class="form-label">Telepon Perusahaan:</label>
                        <input type = "text" id="teleponkantoradd" class="form-control"><br>

                        <label for="email" class="form-label">Email:</label>
                        <input type = "text" id="emailadd" class="form-control"><br>
                    
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
    <div class="modal fade" id="ModalUpdateSupplier" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div  class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Supplier</h1>
            <button type="button" class="btn-warning" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <div id="formKaryawan">
                <form action="tugas1tabelbarang.html" target="_blank" method="post" autocomplete="on">
                        <div>
                            <label for="kode" class="form-label">Kode:</label>
                            <input type = "text" id="kodesp"  readonly class="form-control">
                        </div>
                        
                        <label for="nama" class="form-label">Nama:</label>
                        <input type = "text" id="nama" class="form-control"><br>
                        
                        
                        <label for="satuan" class="form-label">Nama Perusahaan:</label>
                        <input type = "text" id="perusahaan" class="form-control"><br>
                        
                        <label for="hargabeli" class="form-label">Telepon Sales :</label>
                        <input type = "text" id="telpsales" class="form-control"><br>
                        
                        <label for="hargabeli" class="form-label">Telepon Perusahaan :</label>
                        <input type = "text" id="telpkantor" class="form-control"><br>

                        <label for="hargajual" class="form-label">Email:</label>
                        <input type = "text" id="email" class="form-control"><br>

                    
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
        var kd = $('#kodeadd').val();
        var nm = $('#namaadd').val();
        var jb = $('#perusahaanadd').val();
        var tl = $('#teleponsupadd').val();
        var tp = $('#teleponkantoradd').val();
        var em = $('#emailadd').val();
        console.log(kd);
        console.log(nm);
        console.log(jb);
        console.log(tl);
        console.log(tp);
       $.post("simpansuplier.php",{kodesp:kd,nama:nm,perusahaan:jb,
        telpsales:tl,telpkantor:tp,email:em},function(data,status)
       {
         alert("sukses");    
         $('#isi').load("tabelsuplier.php");
       });
          });


        $('#update').click(function () {
        var kd = $('#kodesp').val();
        var nm = $('#nama').val();
        var jb = $('#perusahaan').val();
        var tl = $('#telpsales').val();
        var tp = $('#telpkantor').val();
        var em = $('#email').val();
        console.log(kd);
       $.post("ubahsupplier.php",{kodesp:kd,nama:nm,perusahaan:jb,
        telpsales:tl,telpkantor:tp,email:em
        },function(data,status)
       {
         alert("sukses");    
         $('#isi').load("tabelsuplier.php");
       });
          });


        $('#delete').click(function () {
        var kd = $('#kodesp').val();
        var nm = $('#nama').val();
        var jb = $('#perusahaan').val();
        var tl = $('#telpsales').val();
        var tp = $('#telpkantor').val();
        var em = $('#email').val();
        console.log(kd);
       $.post("hapussuplier.php",{kodesp:kd,nama:nm,perusahaan:jb,
        telpsales:tl,telpkantor:tp,email:em
        },function(data,status)
       {
         alert("sukses");    
         $('#isi').load("tabelsuplier.php");
       });
          });

          
          $("#dataTable").on("click", ".btnUpdateSupplier", function () {
           // $("#kodebr").val("tess");
            let closestTR = $(this).closest("tr").children(0);
			let kodesp = closestTR.eq(0).text();
			let nama = closestTR.eq(1).text();
			let perusahaan = closestTR.eq(2).text();
			let telpsales = closestTR.eq(3).text();
            let telpkantor = closestTR.eq(4).text();
			let email = closestTR.eq(5).text();

			$("#kodesp").val(kodesp);
			console.log($("#kodesp").val());

			// ambil value (id) dari select
			let currentSelect = $(this);
			let id = currentSelect.val();

			$("#nama").val(nama);
			$("#perusahaan").val(perusahaan);
			$("#telpsales").val(telpsales);
            $("#telpkantor").val(telpkantor);
            $("#email").val(email);

        });
        
        
        });



    </script>

