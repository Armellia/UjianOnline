<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $jurusan=$_POST['jurusan'];

        $query="insert into tbjurusan values('','$jurusan')";

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