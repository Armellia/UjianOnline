<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $nis=$_POST['nis'];
        $ruangan=$_POST['ruangan'];
        $hari=$_POST['hari'];
        $jam=$_POST['jam'];
        $kodesoal=$_POST['kodesoal'];
        
        function kodejadwal($koneksi,$ruangan,$hari,$jam){
            $array=explode("-",$jam);
            $jammulai=$array[0];
            $jamselesai=$array[1];    
            $hari1=date('y-m-d',strtotime($hari));
            $jammulai1=date('H:i:s',strtotime($jammulai));
            $jamselesai1=date('H:i:s',strtotime($jamselesai));
            $query="SELECT * FROM `tbjadwal` WHERE ruangan='$ruangan' and jammulai='$jammulai' and jamselesai='$jamselesai' ";
            $execute=mysqli_query($koneksi,$query);
            $hasil=mysqli_fetch_array($execute);
            $kodejadwal=$hasil['kodejadwal'];

            return $kodejadwal;
        }
        $kodejadwal=kodejadwal($koneksi,$ruangan,$hari,$jam);
        $query="insert into tbujian values('','$nis','$kodejadwal','$kodesoal','',0,0)";
        $array=explode("-",$jam);
        echo $kodejadwal;
        $execute=mysqli_query($koneksi,$query);

        if(!$execute){
            echo "<script>alert('Data gagal disimpan');</script>";
        }
        else{
            echo "<script>alert('Data brhasil disimpan');</script>";
        }
        echo "<script>location.href='dataujian.php'</script>";
    }
?>