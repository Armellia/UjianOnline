<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $kodejadwal=$_POST['kodejadwal'];
        $kodepengawas=$_POST['kodepengawas'];
        $ruangan=$_POST['ruangan'];
        $hari=$_POST['hari'];
        $jammulai=$_POST['jammulai'];
        $jamselesai=$_POST['jamselesai'];
        $hari1=date('y-m-d',strtotime($hari));
        $jammulai1=date('H:i:s',strtotime($jammulai));
        $jamselesai1=date('H:i:s',strtotime($jamselesai));

        $query="update tbjadwal set kodepengawas='$kodepengawas',ruangan='$ruangan',hari='$hari1',jammulai='$jammulai1',jumselesai='$jamselesai1'";

        $execute=mysqli_query($koneksi,$query);

        if(!$execute){
            echo "<script>alert('Data gagal diedit');</script>";
        }
        else{
            echo "<script>alert('Data brhasil diedit');</script>";
        }
        echo "<script>location.href='jadwal.php'</script>";
    }
?>