<?php
    include("koneksi.php");
    $kodepengawas=$_GET['kodepengawas'];
    $query="delete from tbpengawas where kodepengawas='$kodepengawas'";
    $execute=mysqli_query($koneksi,$query);

    if(!$execute){
        echo "<script>alert('Data gagal dihapus');</script>";
    }
    else{
        echo "<script>alert('Data brhasil dihapus');</script>";
    }
    echo "<script>location.href='data_pengawas.php'</script>";
?>