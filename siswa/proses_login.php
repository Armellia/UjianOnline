<?php
    include("../dashboard/koneksi.php");
    session_start();
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    
    $query="select * from tbsiswa where username='$username' and password='$password'";
    $execute=mysqli_query($koneksi,$query);
    if(mysqli_num_rows($execute)==0){
        echo "<script>alert('Login gagal');</script>";
        echo "<script>location.href='index.php'</script>";
    }
    else{
        $row=mysqli_fetch_array($execute);
        $_SESSION['nis']=$row['nis'];
        echo "<script>alert('Login brhasil');</script>";
        echo "<script>location.href='code.php'</script>";
    }
    
?>