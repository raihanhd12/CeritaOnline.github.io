<!DOCTYPE html>
<html lang="en">
<head>  
  <title>Home Pembaca</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/menu.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">RHD &amp; MAR | <font size="2">Cerita Online</font><br></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <?php
            session_start();
            if ($_SESSION['status'] == 'pembaca') 
            {
              ?>
              <li><a href="#"><?php echo $_SESSION['username']; ?></a></li>
              <li><a href="prosesLogoutPembaca.php">LOG OUT</a></li>
              <?php 
            } else {
              ?>
                <script language="javascript">alert("Isi Terlebih Dahulu Username dan Password")</script><?php
              ?>
                <script>document.location='login_pembaca.php';</script>
          <?php
            }
          ?>  
        <li><a href="home_pembaca.php">Kembali Ke Home</a></li>      
      </ul>
    </div>
  </div>
</nav>
    <?php
        include '../koneksi.php';
        $id = $_GET['id_cerita'];
        $query = "SELECT c.id_cerita AS id_cerita,
                    k.nama_kategori AS nama_kategori,
                    c.judul_cerita AS judul_cerita,
                    c.author AS author,
                    c.gambar AS gambar,
                    c.isi AS isi
                    FROM cerita c
                    LEFT JOIN kategori k ON c.id_kategori = k.id_kategori
                    WHERE c.id_cerita = '$id'";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result))
            {
                ?>
                <div id="about" class="container-fluid">
                  <div class="row">
                     <div class="col-sm-8">
                       <h2><?php echo $row["judul_cerita"] ?></h2><br>
                       <h4>Pembuat Teks <b><?php echo $row["author"] ?></b></h4>
                       <h5>Kategori: <b><?php echo $row["nama_kategori"] ?></b></h5>
                       <p><?php echo $row["isi"] ?></p>         
                     </div>
                     <div class="col-sm-4 text-right">
                       <img src="<?php echo "../image/".$row["gambar"] ?>" width="100%">
                     </div>
                   </div>
                 </div>
                 <?php
            }
        }
    ?>

<footer class="container-fluid text-center">
  <a href="#myPage" title="Kembali Ke Atas">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy; Copyright by RHD &amp; MAR</p>
</footer>
</body>
</html>