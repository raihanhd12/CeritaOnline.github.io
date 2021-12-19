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
         <?php
            include '../koneksi.php';
            $id = $_GET['id_cerita'];
            $query = "SELECT c.id_cerita AS id_cerita,
                            k.id_kategori AS id_kategori,
                            k.nama_kategori AS nama_kategori,
                            c.judul_cerita AS judul_cerita,
                            c.author AS author,
                            c.gambar AS gambar,
                            c.isi AS isi
                            FROM cerita c
                            LEFT JOIN kategori k ON c.id_kategori = k.id_kategori
                            WHERE id_cerita = '$id'";
            $result = mysqli_query($connect, $query);

            ?>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">MENU ADMIN</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="data_cerita.php">Kembali Ke Data Cerita</a>
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
                    <center><h1 class="mt-4 mb-5">Edit Cerita</h1></center>
                    <div class="container">
                           <form action="prosesAdmin/prosesEditCerita.php" method="POST" enctype="multipart/form-data" class="m-3">
                               <?php  
                                    while($row=mysqli_fetch_array($result)){
                                ?>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Judul Cerita</label>
                                    <input type="hidden" value="<?php echo $row['id_cerita'];   ?>" name="id_cerita" class="form-control" id="exampleInputEmail1">
                                    <input type="text" value="<?php echo $row['judul_cerita'];  ?>" name="judul" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <select name="id_kategori" class="form-select" aria-label="Default select example">
                                        <option value="<?php echo $row['id_kategori']; ?>"><?php echo $row['nama_kategori'];  ?></option>
                                        <?php  
                                            $query2 = "SELECT * FROM kategori";
                                            $result2 = mysqli_query($connect, $query2);

                                            if (mysqli_num_rows($result2) > 0) {
                                                while($row2 = mysqli_fetch_array($result2)){
                                                    ?>
                                                    <option value="<?php echo $row2['id_kategori']; ?>"><?php echo $row2['nama_kategori'];  ?></option>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Author</label>
                                    <input type="text" name="author" value="<?php echo $row['author'];  ?>" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Gambar</label><br>
                                    <img src="<?php echo "../image/".$row["gambar"] ?>" class=" mb-4" width="50%"><br>
                                    <input type="file" name="gambar" value="<?php echo $row['gambar'] ?>" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Isi Cerita</label>
                                    <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3"><?php echo $row['isi'];  ?></textarea>
                                </div>
                                <input type="submit" value="Tambah Cerita" class="btn btn-primary">
                                <?php
                                    }
                               ?>
                               
                           </form>
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
