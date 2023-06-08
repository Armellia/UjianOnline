<?php
    session_start();
    if($_SESSION['username']==""){
        echo "<script>alert('Login terlebih dahulu');</script>";
        echo "<script>location.href='../login/index.html'</script>";
    }
    else{

    }
?>