<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HOME ADMIN</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/sidebar.css" rel="stylesheet" />
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">MENU ADMIN</div>
                <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="home_admin.php">Home Admin</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="tambah_kategori.php">Tambah Kategori</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="data_cerita.php">Data Cerita</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Menu Admin</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <?php  
                                    session_start();
                                    if ($_SESSION['status'] == 'admin') {
                                        ?>
                                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $_SESSION['username']; ?></a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="prosesAdmin/prosesLogoutAdmin.php">Logout</a>
                                            </div>
                                        <?php
                                    } else {
                                        ?>
                                            <script language="javascript">alert("Anda Tidak Diberikan Izin")</script><?php
                                        ?>
                                            <script>document.location='login_admin.php';</script>
                                        <?php
                                    }
                                ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <center><h1 class="mt-4 mb-5">Tambah Kategori</h1></center>
                    <div class="container">
                           <form action="prosesAdmin/prosesTambahKategori.php" method="post" class="m-3 needs-validation" novalidate>
                               <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Nama Kategori</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="nama_kategori" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                            </div>
                                <input type="submit"  value="Masukan Kategori" class="btn btn-primary">
                           </form>
                    </div>
                    <hr>
                    <div class="container table-responsive">
                        <?php
                            if (isset($_GET['alert'])) {
                                if ($_GET['alert']=='gagal') {
                                    ?>
                                    <div class="alert alert-warning alert-dismissible">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert">×</button>
                                            <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
                                            Data Gagal Dimasukan
                                    </div>
                                    <?php
                                }elseif($_GET['alert']=="berhasil")
                                {
                                    ?>
                                    <div class="alert alert-success alert-dismissible">
					                        <button type="button" class="btn-close" data-bs-dismiss="alert">×</button>
					                        <h4><i class="icon fa fa-check"></i> Success</h4>
					                        Data Berhasil Dimasukan
				                    </div>
                                    <?php 					
                                }
                            }
                        ?>
                        <center><h2>Data Kategori</h2></center>
                        <hr>
                        <table class="table table-striped table-hover table-bordered ">
                            <thead class="table-dark">
                                <tr>
                                  <th scope="col">ID Kategori</th>
                                  <th scope="col">Nama Kategori</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                                    include '../koneksi.php';

                                    $query = "SELECT * FROM kategori";
                                    $result = mysqli_query($connect, $query);

                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            ?>
                                            <tr>
                                            <th scope="row"><?php echo $row["id_kategori"] ?></th>
                                            <td><?php echo $row["nama_kategori"] ?></td>
                                            <td>
                                                <a href="edit_kategori.php?id_kategori=<?php echo $row['id_kategori']; ?>" class="btn btn-info">Edit</a>
                                                <a href="prosesAdmin/prosesHapusKategori.php?id_kategori=<?php echo $row['id_kategori']; ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo "0 Result";
                                    }
                              ?>
                              </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/bootstrap.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/sidebar.js"></script>
    </body>
</html>
