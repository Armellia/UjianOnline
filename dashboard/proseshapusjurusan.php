<?php
    include("koneksi.php");
    $kodejurusan=$_GET['kodejurusan'];
    $query="delete from tbjurusan where kodejurusan='$kodejurusan'";
    $execute=mysqli_query($koneksi,$query);

    if(!$execute){
        echo "<script>alert('Data gagal dihapus');</script>";
    }
    else{
        echo "<script>alert('Data brhasil dihapus');</script>";
    }
    echo "<script>location.href='jurusan.php'</script>";
?>