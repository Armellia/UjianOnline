<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $kodekelas=$_POST['kodekelas'];
        $kodekelasp=$kodekelas;
        $jurusan=$_POST['kodejurusan'];
        $kelas=$_POST['kelas'];
        function nama($jurusan,$kelas,$koneksi){
            $query=mysqli_query($koneksi,"select nama from tbjurusan where kodejurusan='$jurusan'");
            $result=mysqli_fetch_array($query);
            $array=explode(" ",$result['nama']);
            $nama="";
            foreach ($array as $result) {
                $nama=$nama.substr($result,0,1);
            }    
            $query="select * from tbkelas where kodejurusan='$jurusan' and kelas='$kelas'";
            $execute=mysqli_query($koneksi,$query);
            $hasil=mysqli_num_rows($execute);
            $hasil=$hasil+1;
            $nama=$nama.$hasil;

            return $nama;
        }
        $nama=nama($jurusan,$kelas,$koneksi);
        $kodekelas=$kelas.$nama;
        $query="update tbkelas set kodekelas='$kodekelas',kodejurusan='$jurusan',nama='$nama',kelas='$kelas' where kodekelas='$kodekelasp'";

        $execute=mysqli_query($koneksi,$query);

        if(!$execute){
            echo "<script>alert('Data gagal diedit');</script>";
        }
        else{
            echo "<script>alert('Data brhasil diedit');</script>";
        }
        //echo "<script>location.href='kelas.php'</script>";
    }
?>