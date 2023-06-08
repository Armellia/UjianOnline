<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $kodepengawas=$_POST['kodepengawas'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $jkel=$_POST['jkel'];
        $telp=$_POST['telp'];

        $query="insert into tbpengawas values('$kodepengawas','$nama','$alamat','$telp','$jkel')";

        $execute=mysqli_query($koneksi,$query);

        if(!$execute){
            echo "<script>alert('Data gagal disimpan');</script>";
        }
        else{
            echo "<script>alert('Data brhasil disimpan');</script>";
        }
        echo "<script>location.href='data_pengawas.php'</script>";
    }
?>