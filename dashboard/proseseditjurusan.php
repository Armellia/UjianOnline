<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $kodejurusan=$_POST['kodejurusan'];
        $jurusan=$_POST['jurusan'];

        $query="update tbjurusan set nama='$jurusan' where kodejurusan='$kodejurusan'";

        $execute=mysqli_query($koneksi,$query);

        if(!$execute){
            echo "<script>alert('Data gagal disimpan');</script>";
        }
        else{
            echo "<script>alert('Data brhasil disimpan');</script>";
        }
        echo "<script>location.href='jurusan.php'</script>";
    }
?>