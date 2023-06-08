<?php
    include("../dashboard/koneksi.php");
    session_start();
    $nis=$_SESSION['nis'];
    $query="select *,tbsiswa.nama as namas,tbkelas.nama as namak from tbsiswa inner join tbkelas on tbsiswa.kodekelas=tbkelas.kodekelas where nis='$nis'";
    $execute=mysqli_query($koneksi,$query);
    $row=mysqli_fetch_array($execute);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Biodata Siswa</title>
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
    <!-- end navbar -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Biodata Siswa</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p>Nama : <?php echo $row['namas'];?></p>
                        <p>Kelas : <?php echo $row['namak'];?></p>
                        <p>Jenis Kelamin : <?php echo $row['jkel'];?></p>

                    </div>
                    <div class="col-md-6">
                        <form action="soal.php" class="form-inline">
                            <button type="submit" class="btn btn-success">Mulai</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>