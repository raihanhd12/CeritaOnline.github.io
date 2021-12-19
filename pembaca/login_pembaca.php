<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Masuk Pembaca</title>
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="../css/bootstrap.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- CSS Style -->
    <link href="../css/style.css" rel="stylesheet">
    </head>

    <body class="text-center">          
      <main class="form-signin">
        <form action="../admin/prosesAdmin/prosesLogin.php" method="POST">
          <img class="mb-4" src="../foto/logo4.jpg" alt="" width="200" height="150">
          <h1 class="h3 mb-3 fw-normal">Portal Masuk</h1>

          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="username" placeholder="nama" required>
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>            
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-warning" type="submit">Masuk</button>
          <br>
          <br>
          <div class="form-floating">
            <center><p>Belum Punya Akun?</p></center>
            <a class="btn btn-warning " href="register_pembaca.php">Daftar</a>
          </div>           
    </div>
          <p class="mt-5 mb-3 text-muted">&copy; Copyright by RHD &amp; MAR</p>
        </form>
      </main>
  </body>
</html>
