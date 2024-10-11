<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: index.php");
}

include 'koneksi.php';
$queryselTR = "select * from `tipe rumah`";
$result = mysqli_query($koneksi, $queryselTR);
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="tiperumah.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Britania Hills (Admin)</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Tipe Rumah -->
            <li class="nav-item active">
                <a class="nav-link" href="tiperumah.php">
                    <i class="fas fa-home"></i>
                    <span>Tipe Rumah</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Fasilitas Modern -->
            <li class="nav-item">
                <a class="nav-link" href="desainprogress.php">
                    <i class="fa fa-paint-brush" aria-hidden="true"></i>
                    <span>Desain Progress & Legalitas</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Fasilitas Modern -->
            <li class="nav-item">
                <a class="nav-link" href="agen.php">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Agen</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION["username"] ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-item"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tipe Rumah</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="visibility: hidden ;border:none">ID</th>
                                            <th>No</th>
                                            <th>Nama Tipe</th>
                                            <th>Harga</th>
                                            <th>Luas Tanah(m2)</th>
                                            <th>Luas Bangunan 1(m2)</th>
                                            <th>Luas Bangunan 2(m2)</th>
                                            <th>Kamar Tidur 1</th>
                                            <th>Kamar Tidur 2</th>
                                            <th>Kamar Mandi</th>
                                            <th>Ruang Tamu</th>
                                            <th>Ruang Keluarga</th>
                                            <th>Dapur</th>
                                            <th>Taman Indoor</th>
                                            <th>Taman Outdoor</th>
                                            <th>Carport</th>
                                            <th>Deskripsi</th>
                                            <th>Edit/Hapus</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th style="visibility: hidden; border:none">ID</th>
                                            <th>No</th>
                                            <th>Nama Tipe</th>
                                            <th>Harga</th>
                                            <th>Luas Tanah(m2)</th>
                                            <th>Luas Bangunan 1</th>
                                            <th>Luas Bangunan 2</th>
                                            <th>Kamar Tidur 1</th>
                                            <th>Kamar Tidur 2</th>
                                            <th>Kamar Mandi</th>
                                            <th>Ruang Tamu</th>
                                            <th>Ruang Keluarga</th>
                                            <th>Dapur</th>
                                            <th>Taman Indoor</th>
                                            <th>Taman Outdoor</th>
                                            <th>Carport</th>
                                            <th>Deskripsi</th>
                                            <th>Edit/Hapus</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 0; ?>
                                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                            <tr>
                                                <?php $no += 1; ?>
                                                <td style="visibility: hidden; border:none"><?= $row["id_tiperumah"] ?></td>
                                                <td><?= $no ?></td>
                                                <td><?= $row["nama_tipe"] ?></td>
                                                <td><?= $row["harga"] ?></td>
                                                <td><?= $row["luas_tanah(m2)"] ?></td>
                                                <td><?= $row["luas_bangunan(m2)"] ?></td>
                                                <td><?= $row["luas_bangunan2(m2)"] ?></td>
                                                <td><?= $row["kamar_tidur"] ?></td>
                                                <td><?= $row["kamar_tidur2"] ?></td>
                                                <td><?= $row["kamar_mandi"] ?></td>
                                                <td><?= $row["ruang_tamu"] ?></td>
                                                <td><?= $row["ruang_keluarga"] ?></td>
                                                <td><?= $row["dapur"] ?></td>
                                                <td><?= $row["taman_indoor"] ?></td>
                                                <td><?= $row["taman_outdoor"] ?></td>
                                                <td><?= $row["carport"] ?></td>
                                                <td><?= $row["desc_pro"] ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-circle editbtn" data-toggle="modal" data-target="#exampleModalCenter">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-circle deletebtn" data-toggle="modal" data-target="#deleteModal">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="btn btn-primary btn-icon-split float-right" style="margin: 0 0 1rem 0;" data-toggle="modal" data-target="#inputModal">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </span>
                        <span class="text">Input data</span>
                    </a>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Britania Hills 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form form action="update.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="idTR" id="idTR">
                        <div class=" form-group">
                            <label for="namatipe" class="col-form-label">Nama Tipe</label>
                            <input type="text" class="form-control" id="namatipe" name="namatipe" required>
                        </div>
                        <div class=" form-group">
                            <label for="harga" class="col-form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" required>
                        </div>
                        <div class="form-group">
                            <label for="luastanah" class="col-form-label">Luas Tanah(m2)</label>
                            <input type="number" class="form-control" id="luastanah" name="luastanah" required>
                        </div>
                        <div class="form-group">
                            <label for="luasbangunan1" class="col-form-label">Luas Bangunan 1</label>
                            <input type="number" class="form-control" id="luasbangunan1" name="luasbangunan1" required>
                        </div>
                        <div class="form-group">
                            <label for="luasbangunan2" class="col-form-label">Luas Bangunan 2</label>
                            <input type="number" class="form-control" id="luasbangunan2" name="luasbangunan2" required>
                        </div>
                        <div class="form-group">
                            <label for="kamartidur1" class="col-form-label">Kamar Tidur 1</label>
                            <input type="number" class="form-control" id="kamartidur1" name="kamartidur1" required>
                        </div>
                        <div class="form-group">
                            <label for="kamartidur2" class="col-form-label">Kamar Tidur 2</label>
                            <input type="number" class="form-control" id="kamartidur2" name="kamartidur2" required>
                        </div>
                        <div class="form-group">
                            <label for="kamarmandi" class="col-form-label">Kamar Mandi</label>
                            <input type="number" class="form-control" id="kamarmandi" name="kamarmandi" required>
                        </div>
                        <div class="form-group">
                            <label for="ruangtamu" class="col-form-label">Ruang Tamu</label>
                            <input type="number" class="form-control" id="ruangtamu" name="ruangtamu" required>
                        </div>
                        <div class="form-group">
                            <label for="ruangkeluarga" class="col-form-label">Ruang Keluarga</label>
                            <input type="number" class="form-control" id="ruangkeluarga" name="ruangkeluarga" required>
                        </div>
                        <div class="form-group">
                            <label for="dapur" class="col-form-label">Dapur</label>
                            <input type="number" class="form-control" id="dapur" name="dapur" required>
                        </div>
                        <div class="form-group">
                            <label for="tamanindoor" class="col-form-label">Taman Indoor</label>
                            <input type="number" class="form-control" id="tamanindoor" name="tamanindoor" required>
                        </div>
                        <div class="form-group">
                            <label for="tamanindoor" class="col-form-label">Taman Outdoor</label>
                            <input type="number" class="form-control" id="tamanoutdoor" name="tamanoutdoor" required>
                        </div>
                        <div class="form-group">
                            <label for="carport" class="col-form-label">Carport</label>
                            <input type="number" class="form-control" id="carport" name="carport" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" class="col-form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" id="EditTR" name="editTR">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Input Modal -->
    <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action = "tambah.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Input</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class=" form-group">
                            <label for="namatipe" class="col-form-label">Nama Tipe</label>
                            <input type="text" class="form-control" id="namatipe" name="namatipe" required>
                        </div>
                        <div class=" form-group">
                            <label for="harga" class="col-form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" required>
                        </div>
                        <div class="form-group">
                            <label for="luastanah" class="col-form-label">Luas Tanah(m2)</label>
                            <input type="number" class="form-control" id="luastanah" name="luastanah" required>
                        </div>
                        <div class="form-group">
                            <label for="luasbangunan1" class="col-form-label">Luas Bangunan 1</label>
                            <input type="number" class="form-control" id="luasbangunan1" name="luasbangunan1" required>
                        </div>
                        <div class="form-group">
                            <label for="luasbangunan2" class="col-form-label">Luas Bangunan 2</label>
                            <input type="number" class="form-control" id="luasbangunan2" name="luasbangunan2" required>
                        </div>
                        <div class="form-group">
                            <label for="kamartidur1" class="col-form-label">Kamar Tidur 1</label>
                            <input type="number" class="form-control" id="kamartidur1" name="kamartidur1" required>
                        </div>
                        <div class="form-group">
                            <label for="kamartidur2" class="col-form-label">Kamar Tidur 2</label>
                            <input type="number" class="form-control" id="kamartidur2" name="kamartidur2" required>
                        </div>
                        <div class="form-group">
                            <label for="kamarmandi" class="col-form-label">Kamar Mandi</label>
                            <input type="number" class="form-control" id="kamarmandi" name="kamarmandi" required>
                        </div>
                        <div class="form-group">
                            <label for="ruangtamu" class="col-form-label">Ruang Tamu</label>
                            <input type="number" class="form-control" id="ruangtamu" name="ruangtamu" required>
                        </div>
                        <div class="form-group">
                            <label for="ruangkeluarga" class="col-form-label">Ruang Keluarga</label>
                            <input type="number" class="form-control" id="ruangtamu" name="ruangkeluarga" required>
                        </div>
                        <div class="form-group">
                            <label for="dapur" class="col-form-label">Dapur</label>
                            <input type="number" class="form-control" id="dapur" name="dapur" required>
                        </div>
                        <div class="form-group">
                            <label for="tamanindoor" class="col-form-label">Taman Indoor</label>
                            <input type="number" class="form-control" id="tamanindoor" name="tamanindoor" required>
                        </div>
                        <div class="form-group">
                            <label for="tamanindoor" class="col-form-label">Taman Outdoor</label>
                            <input type="number" class="form-control" id="tamanoutdoor" name="tamanoutdoor" required>
                        </div>
                        <div class="form-group">
                            <label for="carport" class="col-form-label">Carport</label>
                            <input type="number" class="form-control" id="carport" name="carport" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" class="col-form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="inputTR">Input</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="hapus.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="delete_idTR" id="delete_idTR">
                        Apakah anda yakin ingin menghapusnya?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="delTR" id="delTR">Yakin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php

    // if (isset($_POST['input'])){
    //     $id = $_POST["namatipe"]

    //     mysqli_query($koneksi, "insert into 'tipe rumah' set 
    //     kode_barang = 

    //     ")
    // }

    // $query = "insert into 'tipe rumah' values "
    ?>



    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda yakin ingin keluar?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <!-- <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script> -->

    <!-- Page level custom scripts -->
    <!-- <script src="js/demo/datatables-demo.js"></script> -->


    <!-- Simpan ID pada delete ID(input) -->
    <script>
        $(document).ready(function() {
            $('.deletebtn').on('click', function() {

                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_idTR').val(data[0]);

            });
        });
    </script>

    <!-- Simpan ID pada edit ID(input) -->
    <script>
        $(document).ready(function() {
            $('.editbtn').on('click', function() {

                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#idTR').val(data[0]);
                // langsung ke data 2 karena data 1 adalah nomor(arr data diambil dari <td>)
                $('#namatipe').val(data[2]);
                $('#harga').val(data[3]);
                $('#luastanah').val(data[4]);
                $('#luasbangunan1').val(data[5]);
                $('#luasbangunan2').val(data[6]);
                $('#kamartidur1').val(data[7]);
                $('#kamartidur2').val(data[8]);
                $('#kamarmandi').val(data[9]);
                $('#ruangtamu').val(data[10]);
                $('#ruangkeluarga').val(data[11]);
                $('#dapur').val(data[12]);
                $('#tamanindoor').val(data[13]);
                $('#tamanoutdoor').val(data[14]);
                $('#carport').val(data[15]);
                $('#deskripsi').val(data[16]);

            });
        });
    </script>

</body>

</html>