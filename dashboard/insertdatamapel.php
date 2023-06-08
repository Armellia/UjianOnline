<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $mapel=$_POST['mapel'];
        $kodejurusan=$_POST['kodejurusan'];
        $kodekelas=$_POST['kodekelas'];

        function kodemapel($kodejurusan,$koneksi){
            $query=mysqli_query($koneksi,"select nama from tbjurusan where kodejurusan='$kodejurusan'");
            $result=mysqli_fetch_array($query);
            $array=explode(" ",$result['nama']);
            $nama="";
            foreach ($array as $result) {
                $nama=$nama.substr($result,0,1);
            }    
            $query="select * from tbmapel where kodejurusan='$kodejurusan'";
            $execute=mysqli_query($koneksi,$query);
            $hasil=mysqli_num_rows($execute);
            $hasil=$hasil+1;
            $kodemapel="MP".$nama.$kodejurusan."00".$hasil;

            return $kodemapel;
        }
        $kodemapel=kodemapel($kodejurusan,$koneksi);
        $query="insert into tbmapel values('$kodemapel','$kodejurusan','$kodekelas','$mapel')";
        $execute=mysqli_query($koneksi,$query);

        if(!$execute){
            echo "<script>alert('Data gagal disimpan');</script>";
        }
        else{
            echo "<script>alert('Data brhasil disimpan');</script>";
        }
        echo "<script>location.href='mapel.php'</script>";
    }
?>