<?php
    include("koneksi.php");
    $kodemapel=$_GET['kodemapel'];
    $query="delete from tbmapel where kodemapel='$kodemapel'";
    $execute=mysqli_query($koneksi,$query);

    if(!$execute){
        echo "<script>alert('Data gagal dihapus');</script>";
    }
    else{
        echo "<script>alert('Data brhasil dihapus');</script>";
    }
    echo "<script>location.href='mapel.php'</script>";
?>