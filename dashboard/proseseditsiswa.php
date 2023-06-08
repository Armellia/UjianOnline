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

        $query="update tbsiswa set nama='$nama',alamat='$alamat',jkel='$jkel'
        ,telp='$telp',kodekelas='$kodekelas',username='$username',password='$password' where nis='$nis'";

        $execute=mysqli_query($koneksi,$query);

        if(!$execute){
            echo "<script>alert('Data gagal diedit');</script>";
        }
        else{
            echo "<script>alert('Data brhasil diedit');</script>";
        }
        echo "<script>location.href='data_siswa.php'</script>";
    }
?>