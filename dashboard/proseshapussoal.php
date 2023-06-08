<?php
    include("koneksi.php");
    $kodesoal=$_GET['kodesoal'];
    $query="delete from tbsoal where kodesoal='$kodesoal'";
    $execute=mysqli_query($koneksi,$query);

    if(!$execute){
        echo "<script>alert('Data gagal dihapus');</script>";
    }
    else{
        echo "<script>alert('Data brhasil dihapus');</script>";
    }
    echo "<script>location.href='banksoal.php'</script>";
?>