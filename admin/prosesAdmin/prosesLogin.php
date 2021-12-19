<?php
    include '../../koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM pengguna WHERE username='$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row['level'] == "admin") {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'admin';
        ?>
            <script language="javascript">alert("Username dan Password Sudah Benar")</script><?php
        ?>
            <script>document.location='../home_admin.php';</script>
        <?php
    } elseif ($row['level'] == "pembaca") {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'pembaca';
        ?>
            <script language="javascript">alert("Username dan Password Sudah Benar")</script><?php
        ?>
            <script>document.location='../../pembaca/home_pembaca.php';</script>
        <?php
    } else {
        echo "<br> Anda gagal login. silahkan "; ?>
        <a href="../../index.php">Login Kembali</a>
        <?php
        echo mysqli_error($connect);
    }
?>