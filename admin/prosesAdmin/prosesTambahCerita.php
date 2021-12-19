<?php
    include '../../koneksi.php';

    $judul = $_POST['judul'];
    $id_kategori = $_POST['id_kategori'];
    $author = $_POST['author'];
    $isi = $_POST['isi'];
    $filename = $_FILES['gambar']['name'];

    if($filename != "") {
        $ekstensi_diperbolehkan = array('png','jpg');
        $x = explode('.', $filename); 
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];   
        $angka_acak = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$filename; 
              if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                      move_uploaded_file($file_tmp, '../../image/'.$nama_gambar_baru); 
                        $query = "INSERT INTO cerita VALUES(NULL,'$id_kategori','$judul','$author','$nama_gambar_baru', '$isi')";
                        $result = mysqli_query($connect, $query);
                        if(!$result){
                            die ("Query gagal dijalankan: ".mysqli_errno($connect).
                                 " - ".mysqli_error($connect));
                        } else {
                          header("location:../data_cerita.php?alert=berhasil");
                        }
                  } else {     
                   header("location:../tambah_cerita.php?alert=gagal"); 
                  }
      } else {
        header("location:../tambah_cerita.php?alert=gagal_ekstensi");
      }
?>