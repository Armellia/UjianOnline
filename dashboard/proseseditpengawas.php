<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $kodepengawas=$_POST['kodepengawas'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $jkel=$_POST['jkel'];
        $telp=$_POST['telp'];

        $query="update tbpengawas set nama='$nama',alamat='$alamat',telp='$telp',jkel='$jkel' where kodepengawas='$kodepengawas'";

        $execute=mysqli_query($koneksi,$query);

        if(!$execute){
            echo "<script>alert('Data gagal diedit');</script>";
        }
        else{
            echo "<script>alert('Data brhasil diedit');</script>";
        }
        echo "<script>location.href='data_pengawas.php'</script>";
    }
?>