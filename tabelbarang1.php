<?php
include 'koneksi.php';
$sql = "select * from barang";
$hasil =  mysqli_query($conn,$sql);
?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <title>TOKO</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TOKO</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Master</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="index.php">Barang</a>
                        <a class="collapse-item" href="karyawan.php">Karyawan</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <button 
                                        type="button"
                                        class="btn btn-primary" 
                                        id="btnTambahBarang" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#modalAddBarang"
                                        >Tambah</button>
                    </div>



                   <!-- Modal Tambah Barang-->
    <div class="modal fade" id="modalAddBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddBarang" aria-hidden="true">
        <div  class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Barang</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="formBarang">
                    <form target="_blank" method="post" autocomplete="on">
                        
                        <label for="kode" class="form-label">Kode:</label>
                        <input type = "text" id="kodebradd"  class="form-control">
                        
                        <label for="nama" class="form-label">Nama:</label>
                        <input type = "text" id="namabradd" class="form-control"><br>
                        
                        <label for="satuan" class="form-label">Satuan:</label>
                        <input type = "text" id="satuanadd" class="form-control"><br>
                        
                        <label for="hargabeli" class="form-label">Harga Beli:</label>
                        <input type = "text" id="hargabeliadd" class="form-control"><br>

                        <label for="hargajual" class="form-label">Harga Jual:</label>
                        <input type = "text" id="hargajualadd" class="form-control"><br><br>
                    
                        
                    </form>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="save" >Save</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                
                <!-- <button type="button" class="btn btn-success" data-bs-dismiss="modal" name="save" id="save" >Save</button> -->
            </div>
        </div>
        </div>
    </div>
                    
                       <!-- Modal Update Barang-->
    <div class="modal fade" id="ModalUpdateBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div  class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Barang</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="formBarang">
                <form action="tugas1tabelbarang.html" target="_blank" method="post" autocomplete="on">
                        <div>
                            <label for="kode" class="form-label">Kode:</label>
                            <input type = "text" id="kodebr"  readonly class="form-control">
                        </div>
                        
                        <label for="nama" class="form-label">Nama:</label>
                        <input type = "text" id="namabr" class="form-control"><br>
                        
                        
                        <label for="satuan" class="form-label">Satuan:</label>
                        <input type = "text" id="satuan" class="form-control"><br>
                        
                        <label for="hargabeli" class="form-label">Harga Beli:</label>
                        <input type = "text" id="hargabeli" class="form-control"><br>

                        <label for="hargajual" class="form-label">Harga Jual:</label>
                        <input type = "text" id="hargajual" class="form-control"><br><br>
                    
</form>
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="delete" >Delete</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="update" >Update</button>
                </div>
        </div>
        </div>
    </div>
    <!-- ---------------------------- -->
    <div class="card shadow mb-5">
              <div class="card-header py-4">
                <h6 class="m-0 font-weight-bold text-primary">Barang</h6>
              </div>

              <div id="tables" style="overflow-x: auto">
                <div class="card-body">
                  <div class="table-responsive">                 
                       
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >  
                        <thead>
                        <tr >
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Satuan</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
</div>
</div>
</div>
</div>
                       <?php
                        if(mysqli_num_rows($hasil)>0)
{
    while($isi=mysqli_fetch_assoc($hasil))
    {
        echo '<tr><td>';
        echo $isi["kodebr"];
        echo '</td><td>';
        echo $isi["namabr"];
        echo '</td><td>';
        echo $isi["satuan"];
        echo '</td><td>';
        echo $isi["hargabeli"];
        echo '</td><td>';
        echo $isi["hargajual"];
        echo '</td><td>';
        echo '<button class="btnUpdateBarang btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalUpdateBarang">U</button>';
        echo '</td></tr>'; 
    }
}
?>
                        </tbody>
                    </table>
                
                
                    
      
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>
<script>
       $(document).ready(function () {        
       $('#save').click(function () {
        var kd = $('#kodebradd').val();
        var nm = $('#namabradd').val();
        var st = $('#satuanadd').val();
        var hb = $('#hargabeliadd').val();
        var hj = $('#hargajualadd').val();
        console.log(kd);
       $.post("simpanbarang.php",{kodebr:kd,namabr:nm,satuan:st,
        hargabeli:hb,hargajual:hj
        },function(data,status)
       {
         alert("sukses");    
         location.reload();
       });
          });


          $('#update').click(function () {
        var kd = $('#kodebr').val();
        var nm = $('#namabr').val();
        var st = $('#satuan').val();
        var hb = $('#hargabeli').val();
        var hj = $('#hargajual').val();
        console.log(kd);
       $.post("ubahbarang.php",{kodebr:kd,namabr:nm,satuan:st,
        hargabeli:hb,hargajual:hj
        },function(data,status)
       {
         alert("sukses");    
         location.reload();
       });
          });


        $('#delete').click(function () {
        var kd = $('#kodebr').val();
        var nm = $('#namabr').val();
        var st = $('#satuan').val();
        var hb = $('#hargabeli').val();
        var hj = $('#hargajual').val();
        console.log(kd);
       $.post("hapusbarang.php",{kodebr:kd,namabr:nm,satuan:st,
        hargabeli:hb,hargajual:hj
        },function(data,status)
       {
         alert("sukses");    
         location.reload();
       });
          });

          $("#dataTable").on("click", ".btnUpdateBarang", function () {
           // $("#kodebr").val("tess");
            let closestTR = $(this).closest("tr").children(0);
			let kodebr = closestTR.eq(0).text();
			let namabr = closestTR.eq(1).text();
			let satuan = closestTR.eq(2).text();
			let hargabeli = closestTR.eq(3).text();
            let hargajual = closestTR.eq(4).text();
			
			$("#kodebr").val(kodebr);
			console.log($("#kodebr").val());

			// ambil value (id) dari select
			let currentSelect = $(this);
			let id = currentSelect.val();

			$("#namabr").val(nama);
			$("#satuan").val(satuan);
			$("#hargabeli").val(hargabeli);
            $("#hargajual").val(hargajual);

        });
        
        
        });



    </script>