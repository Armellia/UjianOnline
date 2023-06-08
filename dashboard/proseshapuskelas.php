<?php
    include("koneksi.php");
    $kodekelas=$_GET['kodekelas'];
    $query="delete from tbkelas where kodekelas='$kodekelas'";
    $execute=mysqli_query($koneksi,$query);

    if(!$execute){
        echo "<script>alert('Data gagal dihapus');</script>";
    }
    else{
        echo "<script>alert('Data brhasil dihapus');</script>";
    }
    echo "<script>location.href='kelas.php'</script>";
?>