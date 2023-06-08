<!DOCTYPE html>
<html lang="en">

<head>
    <title>Finsih</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/index.css">
    <script type="text/javascript" src="asset/js/bootstrap.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/js/jquery-3.4.1.min.js"></script>
</head>

<body>
    <!-- Navbar Here -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="" alt="">
        </a>
    </nav>
    <!-- CONTENT HERE -->
    <div class="container">
        <div class="">
            <div class="card">
                <div class="card-header">
                    <h3></h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 align="center">Selamat anda sudah selesai mengerjakan soal</h5>
                            <?php
                                include("../dashboard/koneksi.php");
                                session_start();
                                $nis=$_SESSION['nis'];
                                $query="SELECT * FROM `tbujian` inner join tbsiswa on tbujian.nis=tbsiswa.nis 
    inner join tbsoal on tbujian.kodesoal=tbsoal.kodesoal where tbujian.nis='$nis'";
                                $execute=mysqli_query($koneksi,$query);
                                $benar=0;
                                $salah=0;
                                while($row=mysqli_fetch_array($execute)){
                                    if($row['nilai']==1){
                                        $benar=$benar+1;
                                    }
                                    else{
                                        $salah=$salah+1;
                                    }
                                }
                                $count=mysqli_num_rows($execute);
                                $nilai=100/$count;
                                $nilai=$nilai*$benar;
                                echo "Benar : ".$benar." Soal<br>";
                                echo "Salah : ".$salah." Soal<br>";
                                echo "Nilai : ".$nilai."<br>";

                            ?>
                        </div>
                    <div class="col-md-6">
                        <form action="code.php">
                            <button type="submit" class="btn btn-success" value="Submit">Finish</button>
                        </form>
                    </div>
                </div>
                <br>
                <div class="card-footer">
                    <p>Copyright by Uon</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <footer>
        <div class="footer-copyright text-center py-3">© 2018 Copyright By BN

        </div>
    </footer>
    <!-- End Nabvar -->
</body>

</html>