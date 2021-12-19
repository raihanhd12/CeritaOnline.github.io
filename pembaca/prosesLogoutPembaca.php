<?php
    session_start();
    session_destroy();

    ?>
        <script language="javascript">alert("Logout Berhasil")</script><?php
    ?>
    <script>document.location='login_pembaca.php';</script>
    <?php
?>