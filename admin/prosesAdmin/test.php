<?php
    include '../../koneksi.php';
    $id_cerita = $_POST['id_cerita'];
    $judul = $_POST['judul'];
    $id_kategori = $_POST['id_kategori'];
    $author = $_POST['author'];
    $isi = $_POST['isi'];
    $filename = $_FILES['gambar']['name'];

    if ($filename != "") {
        $ekstensi_diperbolehkan = array('png','jpg');
        $x = explode('.', $filename); 
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];   
        $angka_acak = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$filename; 
    if ((in_array($ekstensi, $ekstensi_diperbolehkan) === true)
        {
            move_uploaded_file($file_tmp, '../../image/'.$nama_gambar_baru);
            $query = "UPDATE cerita SET 
                        id_kategori = '$id_kategori',
                        judul_cerita = '$judul',
                        author = '$author',
                        gambar = '$nama_gambar_baru',
                        isi = '$isi'
                        WHERE id_cerita = '$id_cerita'";
            $result = mysqli_query($connect, $query);
            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($connect).
                     " - ".mysqli_error($connect));
            } else {
                ?>
                <script language="javascript">alert("Edit Cerita Berhasil")</script><?php
                ?>
                <script>document.location='../data_cerita.php';</script>
                <?php
            }
        } else {
            ?>
            <script language="javascript">alert("Hapus Cerita Gagal")</script><?php
            ?>
            <script>document.location='../data_cerita.php';</script>
            <?php
        } else {
            ?>
            <script language="javascript">alert("Hapus Cerita Gagal Extensi")</script><?php
            ?>
            <script>document.location='../data_cerita.php';</script>
            <?php
        }
    }
?>