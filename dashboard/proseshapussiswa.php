<?php
    include("koneksi.php");
    $nis=$_GET['nis'];
    $query="delete from tbsiswa where nis='$nis'";
    $execute=mysqli_query($koneksi,$query);

    if(!$execute){
        echo "<script>alert('Data gagal dihapus');</script>";
    }
    else{
        echo "<script>alert('Data brhasil dihapus');</script>";
    }
    echo "<script>location.href='data_siswa.php'</script>";
?>