<?php
    include '../koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $level = $_POST['level'];

    $sql = "INSERT INTO pengguna VALUES (
        NULL , '$username', '$password', '$nama_lengkap', '$email'
        , '$tanggal_lahir', '$jenis_kelamin', '$level')";

    if (mysqli_query($connect, $sql)) {
        ?>
        <script language="javascript">alert("Register Berhasil")</script><?php
        ?>
        <script>document.location='login_pembaca.php';</script>
        <?php
    } else {
        ?>
        <script language="javascript">alert("Register Anda Gagal. Silahkan Isi Ulang")</script><?php
        ?>
        <script>document.location='login_pembaca.php';</script>
        <?php
    }

    mysqli_close($connect);

?>