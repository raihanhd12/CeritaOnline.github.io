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
        <li><a href="#about">TENTANG PEMBUAT</a></li>
        <li><a href="#kategori">KATEGORI CERITA</a></li>
        <li><a href="#cerita">CERITA</a></li>
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
             
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>CERITA ONLINE</h1> 
  <p>- Think Before You Speak. Read Before You Think -</p> 
</div>

<!-- Container (Tentang Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Tentang Web Cerita Online</h2><br>
      <h4>Merupakan platform bagi seseorang atau pembaca untuk membaca berbagai macam cerita tanpa harus membawa bawa buku cetak cerita.</h4>
      <p>Kelebihan web cerita online ini, karena tidak memiliki bentuk fisik, website ini punya banyak kelebihan dari segi efisiensi dan tahan lama. Terutama soal ketahanan dikarenakan berbasis web maka akan lebih tahan lama datipada buku cetak, karena web cerita online hadir dalam bentuk web yang bisa diakses atau dilihat di berbagai media elektronik, seperti laptop, handphone, hingga notebook. Tujuan web ini adalah untuk meningkatkan minat baca seseorang atau pengguna dikarenakan tidak perlu membawa buku kemana mana dan juga lebih efisien.</p>         
    </div>
    <div class="col-sm-4 text-right">
      <span class="glyphicon glyphicon-book logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <h2 style="text-align: center;">TENTANG PEMBUAT</h2><br>
  <div class="row">  
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo"></span>
    </div> 
    <div class="col-sm-8  text-right" >      
      <h4><strong>Raihan Hidayatullah Djunaedi</strong></h4><br>
      <p><strong>Biasa dipanggil Raihan.</strong> Ia adalah seorang....</p>
      <br><button class="btn btn-default btn-lg"><a href="aboutUsRaihan.php">Selengkapnya</a></button>
    </div>
    <br>
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-8 text-left">      
      <h4><strong>Muhammad Al Kausar Ramadhan</strong></h4><br>
      <p><strong>Biasa dipanggil Alka.</strong> Ia adalah seorang...</p>
      <br><button class="btn btn-default btn-lg"><a href="aboutUsAlka.php">Selengkapnya</a></button>
    </div>
    <div class="col-sm-4 text-right">
      <span class="glyphicon glyphicon-user logo"></span>
    </div>
  </div>
</div>

<!-- Container (Kategori Section) -->
<div id="kategori" class="container-fluid text-center">
  <h2>KATEGORI CERITA</h2>
  <h4>Macam - Macam Kategori Cerita Online</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-header logo-small"></span>
      <h4>Horror</h4>
      <p>Cerita horror adalah cerita berupa fiksi atau drama yang menyertakan unsur hantu. Kepercayaan mengenai hantu dapat ditemukan pada semua budaya di seluruh dunia, dan itu sebabnya cerita hantu mungkin diturunkan dari generasi ke generasi melalui lisan maupun tulisan.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-tree-conifer logo-small"></span>
      <h4>Adventure</h4>
      <p>Cerita adventure adalah genre fiksi yang mengisahkan mengenai petualangan, suatu usaha yang menarik dan melibatkan risiko dan bahaya fisik, yang membentuk alur cerita utama.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>Romance</h4>
      <p>Cerita romance adalah hubungan cinta/asmara. Romance adalah sebuah genre yang dialami banyak orang. Masalahnya, seringkali pembaca genre romance akhirnya bosan dengan cerita cinta yang monoton dan bisa dengan mudah ditebak alurnya.</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-star-empty logo-small"></span>
      <h4>Fantasy</h4>
      <p>Cerita fantasy adalah karangan yang berisi kisah penuh imajinasi dan khayalan hingga melebihi realitas. Dalam cerita fantasy, segala sesuatu yang bersifat tidak mungkin di dunia nyata merupakan hal yang biasa.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-eur logo-small"></span>
      <h4>Comedy</h4>
      <p>Cerita comedy adalah jenis cerita yang sesuai namanya ini akan mengandung banyak unsur komedi. Karena tujuannya memang untuk membuat pembaca tertawa.
 </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-screenshot logo-small"></span>
      <h4>Action</h4>
      <p>Cerita action adalah sebuah ‘Genre’ dalam fanfiction. Action berarti dalam cerita tersebut akan mengandung beberapa aksi yang biasanya merujuk pada perkelahian atau pertempuran ini biasanya menceritakan aksi sang tokoh melawan sesuatu, menghadapi sesuatu atau menjawab sebuah tantangan.</p>
    </div>
  </div>
</div>

<!-- Container (Cerita Section) -->
<div id="cerita" class="container-fluid text-center bg-grey">
  <h2>CERITA</h2><br>
  <h4>Baca Sekarang</h4>
    <div class="row text-center slideanim ">
  <?php  
      include '../koneksi.php';
        $query = "SELECT * FROM cerita";
        $result = mysqli_query($connect, $query);

      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
            ?>
          <div class="col-sm-4">
                <div class="thumbnail">
                  <img src="../foto/foto1.jpg" alt="Buku1" >
                  <p><strong><?php echo $row["judul_cerita"] ?></strong></p>
                  <a class="btn btn-warning" href="baca_selengkapnya.php?id_cerita=<?php echo $row['id_cerita']; ?>">Baca Selengkapnya</a>
              </div>
        </div>
        <?php
          }
      }
    ?>
  </div>
<footer class="container-fluid text-center">
  <a href="#myPage" title="Kembali Ke Atas">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy; Copyright by RHD &amp; MAR</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>
</html>