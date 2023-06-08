<?php
    include("../dashboard/koneksi.php");
    session_start();

    $nis=$_SESSION['nis'];
    $query="SELECT * FROM `tbujian` inner join tbsiswa on tbujian.nis=tbsiswa.nis 
    inner join tbsoal on tbujian.kodesoal=tbsoal.kodesoal where tbujian.nis='$nis'";
    $execute=mysqli_query($koneksi,$query);
    
    $row=mysqli_num_rows($execute);
    
    for($i=1;$i<=$row;$i++){
        if(isset($_POST['jawaban'.$i])){
        $jawaban[$i]=$_POST['jawaban'.$i];
        $kodesoal[$i]=$_POST['kodesoal'.$i];
        }
        else{
            echo "<script>alert('Isi semua jwaban');</script>";
            echo "<script>location.href='soal.php';</script>";
        }
        
    }
    foreach(array_combine($kodesoal,$jawaban) as $soal=>$jawab){
        $query="update tbujian set jawaban='$jawab', status=1 where kodesoal='$soal'";
        mysqli_query($koneksi,$query);
        echo $soal;
    }
    
    
    foreach($kodesoal as $soal){
        $query1="SELECT * FROM `tbujian` inner join tbsiswa on tbujian.nis=tbsiswa.nis 
    inner join tbsoal on tbujian.kodesoal=tbsoal.kodesoal where tbujian.nis='$nis' and tbujian.kodesoal='$soal'";
        $execute1=mysqli_query($koneksi,$query1);
        $row1=mysqli_fetch_array($execute1);
        
        if($row1['jawaban']==$row1['kuncijawaban']){
            $query2="update tbujian set nilai=1 where kodesoal='$soal' and tbujian.nis='$nis'";
            mysqli_query($koneksi,$query2);
            echo "<script>location.href='finish.php';</script>";
        }
        
        
    }
?>