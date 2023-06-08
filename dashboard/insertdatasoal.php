<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $kodemapel=$_POST['kodemapel'];
        $kodekelas=$_POST['kodekelas'];
        $soal=$_POST['soal'];
        $jawaban1=$_POST['jawaban1'];
        $jawaban2=$_POST['jawaban2'];
        $jawaban3=$_POST['jawaban3'];
        $jawaban4=$_POST['jawaban4'];
        $kuncijawaban=$_POST['kuncijawaban'];
        function kodesoal($mapel,$kelas,$koneksi){
            $query=mysqli_query($koneksi,"select nama from tbmapel where kodemapel='$mapel'");
            $result=mysqli_fetch_array($query);
            $array=explode(" ",$result['nama']);
            $nama="";
            foreach ($array as $result) {
                $nama=$nama.substr($result,0,1);
            }    
            $query="select * from tbkelas where kodekelas='$kelas'";
            $execute=mysqli_query($koneksi,$query);
            $hasil=mysqli_fetch_array($execute);
            $query2="select * from tbsoal where kodemapel='$mapel' and kodekelas='$kelas'";
            $execute2=mysqli_query($koneksi,$query2);
            $hasil2=mysqli_num_rows($execute2);
            $hasil2=$hasil2+1;
            $nama="S".$nama.$hasil['kelas']."_".$hasil2;

            return $nama;
        }
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
        $kodesoal=kodesoal($kodemapel,$kodekelas,$koneksi);
        $query="insert into tbsoal values('$kodesoal','$kodemapel','$kodekelas','$soal','$jawaban1','$jawaban2','$jawaban3'
        ,'$jawaban4','$kunci')";

        $execute=mysqli_query($koneksi,$query);

        if(!$execute){
            echo "<script>alert('Data gagal disimpan');</script>";
        }
        else{
            echo "<script>alert('Data brhasil disimpan');</script>";
        }
        echo "<script>location.href='banksoal.php'</script>";
    }
?>