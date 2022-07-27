<?php
    session_start();
    session_destroy();

    setcookie("UserName", "" ,time()-86400);

    header("Location: index.php");
?>