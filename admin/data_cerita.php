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
                    <div class="container table-responsive">
                        <center><h2>Data Cerita</h2></center>
                        <hr>
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                  <th scope="col">ID Cerita</th>
                                  <th scope="col">Kategori</th>
                                  <th scope="col">Judul Cerita</th>
                                  <th scope="col">Author</th>
                                  <th scope="col">Gambar</th>
                                  <th scope="col">Isi</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php  
                                        include '../koneksi.php';

                                        $query = "SELECT c.id_cerita AS id_cerita,
                                                    k.nama_kategori AS nama_kategori,
                                                    c.judul_cerita AS judul_cerita,
                                                    c.author AS author,
                                                    c.gambar AS gambar,
                                                    c.isi AS isi
                                                    FROM cerita c
                                                    LEFT JOIN kategori k ON c.id_kategori = k.id_kategori";
                                        $result = mysqli_query($connect, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                ?>
                                                <tr>
                                                <th scope="row"><?php echo $row["id_cerita"] ?></th>
                                                <td><?php echo $row["nama_kategori"] ?></td>
                                                <td><?php echo $row["judul_cerita"] ?></td>
                                                <td><?php echo $row["author"] ?></td>
                                                <td><img src="<?php echo "../image/".$row["gambar"] ?>" width="60"></td>
                                                <td class="d-inline-block text-truncate" style="max-width: 150px;"><?php echo $row["isi"] ?></td>
                                                <td>
                                                    <a class="btn btn-success" href="edit_cerita.php?id_cerita=<?php echo $row['id_cerita']; ?>" class="btn btn-info">Edit</a>
                                                    <a class="btn btn-danger" href="prosesAdmin/prosesHapusCerita.php?id_cerita=<?php echo $row['id_cerita']; ?>">Delete</a>
                                                </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                    ?>
                              </tbody>
                        </table>
                        <div class="mb-3">
                                <a href="tambah_cerita.php" class="btn btn-primary">Tambah Cerita</a>
                        </div>
                        <?php  
                            if (isset($_GET['alert'])) {
                                if ($_GET['alert']=='berhasil') {
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
        <script>
            var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
            var alertTrigger = document.getElementById('liveAlertBtn')

            function alert(message, type) {
                var wrapper = document.createElement('div')
                wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                alertPlaceholder.append(wrapper)
            }

            if (alertTrigger) {
                alertTrigger.addEventListener('click', function () {
                alert('Cerita Berhasil Dimasukan', 'success')
            });
        }
        </script>
    </body>
</html>
