<?php
    include("../dashboard/koneksi.php");
    session_start();
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    $query="select * from tbuser where username='$username' and password='$password'";
    $execute=mysqli_query($koneksi,$query);
    if(!$execute){
        echo "<script>alert('Login gagal');</script>";
        echo "<script>location.href='index.html'</script>";
    }
    else{
        echo "<script>alert('Login brhasil');</script>";
        echo "<script>location.href='../dashboard/index.php'</script>";
    }
    
?>