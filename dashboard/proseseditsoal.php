<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $kodesoal=$_POST['kodesoal'];
        $kodemapel=$_POST['kodemapel'];
        $kodekelas=$_POST['kodekelas'];
        $soal=$_POST['soal'];
        $jawaban1=$_POST['jawaban1'];
        $jawaban2=$_POST['jawaban2'];
        $jawaban3=$_POST['jawaban3'];
        $jawaban4=$_POST['jawaban4'];
        $kuncijawaban=$_POST['kuncijawaban'];
        function kuncijawaban($kuncijawaban,$jawaban1,$jawaban2,$jawaban3,$jawaban4){
            if($kuncijawaban==="jawaban1"){
                $kunci=$jawaban1;
            }
            else if($kuncijawaban==="jawaban2"){
                $kunci=$jawaban2;
            }
            else if($kuncijawaban==="jawaban3"){
                $kunci=$jawaban3;
            }
            else{
                $kunci=$jawaban4;
            }
            return $kunci;
        }
        $kunci=kuncijawaban($kuncijawaban,$jawaban1,$jawaban2,$jawaban3,$jawaban4);
        $query="update tbsoal set soal='$soal',jawaban1='$jawaban1',jawaban2='$jawaban2',jawaban3='$jawaban3'
        ,jawaban4='$jawaban4',kuncijawaban='$kunci' where kodesoal='$kodesoal'";

        $execute=mysqli_query($koneksi,$query);

        if(!$execute){
            echo "<script>alert('Data gagal edit');</script>";
        }
        else{
            echo "<script>alert('Data brhasil edit');</script>";
        }
        echo "<script>location.href='banksoal.php'</script>";
    }
?>