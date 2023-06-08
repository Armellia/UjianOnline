<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $kodemapel=$_POST['kodemapel'];
        $kodemapelp=$kodemapel;
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
        $query="update tbmapel set kodemapel='$kodemapel',kodejurusan='$kodejurusan',kodekelas='$kodekelas',nama='$mapel'
         where kodemapel='$kodemapelp'
        ";
        $execute=mysqli_query($koneksi,$query);

        if(!$execute){
            echo "<script>alert('Data gagal diedit');</script>";
        }
        else{
            echo "<script>alert('Data brhasil diedit');</script>";
        }
        echo "<script>location.href='mapel.php'</script>";
    }
?>