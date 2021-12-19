

<?php
    include '../../koneksi.php';

    $namaKategori = $_POST['nama_kategori'];

    $sql = "INSERT INTO kategori (nama_kategori) VALUES
            ('$namaKategori')";
    
    if (mysqli_query($connect, $sql)) {
        header("location:../tambah_kategori.php?alert=berhasil");
    } else {
        header("location:../tambah_kategori.php?alert=gagal");
    }

    mysqli_close($connect);
?>