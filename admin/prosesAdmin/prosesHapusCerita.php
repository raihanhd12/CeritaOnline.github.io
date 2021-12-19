<?php
    include '../../koneksi.php';

    $id = $_GET['id_cerita'];
    $query = "DELETE FROM cerita WHERE id_cerita = '$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        ?>
        <script language="javascript">alert("Hapus Cerita Berhasil")</script><?php
        ?>
        <script>document.location='../data_cerita.php';</script>
        <?php
    } else {
        ?>
        <script language="javascript">alert("Hapus Cerita Gagal")</script><?php
        ?>
        <script>document.location='../data_cerita.php';</script>
        <?php
    }
?>