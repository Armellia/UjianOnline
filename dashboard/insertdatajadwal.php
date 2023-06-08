<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $kodepengawas=$_POST['kodepengawas'];
        $ruangan=$_POST['ruangan'];
        $hari=$_POST['hari'];
        $jammulai=$_POST['jammulai'];
        $jamselesai=$_POST['jamselesai'];
        $hari1=date('y-m-d',strtotime($hari));
        $jammulai1=date('H:i:s',strtotime($jammulai));
        $jamselesai1=date('H:i:s',strtotime($jamselesai));

        $query="insert into tbjadwal values('','$kodepengawas','$ruangan','$hari1','$jammulai1','$jamselesai1')";

        $execute=mysqli_query($koneksi,$query);

        if(!$execute){
            echo "<script>alert('Data gagal disimpan');</script>";
        }
        else{
            echo "<script>alert('Data brhasil disimpan');</script>";
        }
        echo "<script>location.href='jadwal.php'</script>";
    }
?>