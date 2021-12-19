<?php
    include '../../koneksi.php';

    $id_cerita = $_POST['id_cerita'];
    $judul = $_POST['judul'];
    $id_kategori = $_POST['id_kategori'];
    $author = $_POST['author'];
    $isi = $_POST['isi'];
    $filename = $_FILES['gambar']['name'];
    $file_tmp = $_FILES['gambar']['tmp_name'];   

    if ($filename != "") {
        $query = "UPDATE cerita SET 
                id_kategori = '$id_kategori',
                judul_cerita = '$judul',
                author = '$author',
                gambar = '$filename',
                isi = '$isi'
                WHERE id_cerita = '$id_cerita'";
        $result = mysqli_query($connect, $query);

    if ($result) {
        move_uploaded_file($file_tmp, '../../image/'.$filename);
        ?>
            <script language="javascript">alert("Edit Cerita Berhasil")</script><?php
            ?>
            <script>document.location='../data_cerita.php';</script>
        <?php
    } else {
        ?>
            <script language="javascript">alert("Edit Cerita Gagal")</script><?php
            ?>
            <script>document.location='../data_cerita.php';</script>
        <?php
        }
    } else {
        $query = "UPDATE cerita SET 
                id_kategori = '$id_kategori',
                judul_cerita = '$judul',
                author = '$author',
                isi = '$isi'
                WHERE id_cerita = '$id_cerita'";
        $result = mysqli_query($connect, $query);

        if ($result) {
            ?>
                <script language="javascript">alert("Edit Cerita Berhasil")</script><?php
                ?>
                <script>document.location='../data_cerita.php';</script>
            <?php
        } else {
            ?>
                <script language="javascript">alert("Edit Cerita Gagal")</script><?php
                ?>
                <script>document.location='../data_cerita.php';</script>
            <?php
            }
    }
?>