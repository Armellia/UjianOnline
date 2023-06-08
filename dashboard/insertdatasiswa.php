<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $nis=$_POST['nis'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $jkel=$_POST['jkel'];
        $telp=$_POST['telp'];
        $kodekelas=$_POST['kodekelas'];
        $username=$_POST['username'];
        $password=$_POST['password'];

        $query="insert into tbsiswa values('$nis','$kodekelas','$nama','$alamat','$jkel','$telp','$username','$password')";

        $execute=mysqli_query($koneksi,$query);

        if(!$execute){
            echo "<script>alert('Data gagal disimpan');</script>";
        }
        else{
            echo "<script>alert('Data brhasil disimpan');</script>";
        }
        echo "<script>location.href='data_siswa.php'</script>";
    }
?>