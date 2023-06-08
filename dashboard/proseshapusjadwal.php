<?php
    include("koneksi.php");
    $kodejadwal=$_GET['kodejadwal'];
    $query="delete from tbjadwal where kodejadwal='$kodejadwal'";
    $execute=mysqli_query($koneksi,$query);

    if(!$execute){
        echo "<script>alert('Data gagal dihapus');</script>";
    }
    else{
        echo "<script>alert('Data brhasil dihapus');</script>";
    }
    echo "<script>location.href='jadwal.php'</script>";
?>