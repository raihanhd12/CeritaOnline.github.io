<?php
    include '../../koneksi.php';

    $id = $_GET['id_kategori'];
    $nama = $_GET['nama_kategori'];

    $query = "UPDATE kategori SET nama_kategori = '$nama' WHERE id_kategori = '$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        header("location:../tambah_kategori.php");
    } else {
        header("location:../tambah_kategori.php");
    }
?>