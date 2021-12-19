<?php
    include '../../koneksi.php';

    $id = $_GET['id_kategori'];
    $query = "DELETE FROM kategori WHERE id_kategori = '$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        header("location:../tambah_kategori.php");
    } else {
        header("location:../tambah_kategori.php");
    }
?>