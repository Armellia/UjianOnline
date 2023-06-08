<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>
        Black Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper">
    <?php
        include("menu.php");
        include("koneksi.php");
        
    ?>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="assets/img/anime3.png" alt="Profile Photo">
                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                    <p class="d-lg-none">
                                        Log out
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log
                                            out</a></li>
                                </ul>
                            </li>
                            <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title">Edit Siswa</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php
                                            $nis=$_GET['nis'];
                                            $query="select * from tbsiswa where nis='$nis'";
                                            $execute=mysqli_query($koneksi,$query);
                                            $data=mysqli_fetch_array($execute);
                                        ?>
                                        <form action="proseseditsiswa.php" method="post" class="from-horizontal" role="form">
                                            <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <input type="hidden" class="form-control" id="lastname"
                                                            placeholder="NIS" name="nis" value="<?php echo $data['nis'];?>">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="lastname"
                                                        placeholder="Nama Siswa" name="nama"  value="<?php echo $data['nama'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="lastname"
                                                        placeholder="Alamat" name="alamat"  value="<?php echo $data['alamat'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" id="lastname"
                                                            placeholder="Jenis Kelamin" name="jkel"  value="<?php echo $data['jkel'];?>">
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="lastname"
                                                    placeholder="No. Telp" name="telp" value="<?php echo $data['telp'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                    <select class="form-control" name="kodekelas" id="kelas">
                                                        <option value="<?php echo $data['kodekelas'];?>">
                                                            <?php echo $data['kodekelas'];?>
                                                        </option>
                                                        <?php
                                                            $query2="select * from tbkelas where kodekelas not in('$data[kodekelas]')";
                                                            $execute1=mysqli_query($koneksi,$query2);
                                                            while($data1=mysqli_fetch_array($execute1)){
                                                        ?>
                                                        <option value="<?php echo $data1['kodekelas'];?>">
                                                            <?php echo $data1['kodekelas'];?>
                                                        </option>
                                                        
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="lastname"
                                                    placeholder="User" name="username" value="<?php echo $data['username'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="lastname"
                                                    placeholder="Password" name="password" value="<?php echo $data['password'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="submit" value="Submit" class="form-control" name="submit">
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/demo/demo.js"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
</body>

</html>