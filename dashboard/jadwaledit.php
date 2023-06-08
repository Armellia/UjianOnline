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

        $kodejadwal=$_GET['kodejadwal'];
        $query="select * from tbjadwal inner join tbpengawas on tbjadwal.kodepengawas=tbpengawas.kodepengawas";
        $execute=mysqli_query($koneksi,$query);
        $data1=mysqli_fetch_array($execute);
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
                                <h4 class="card-title">Data Jadwal Ujian</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="insertdatajadwal.php" method="post" class="from-horizontal" role="form">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                <input type="hidden" class="form-control" id="" name="kodejadwal" value="<?php echo $data1['kodejadwal']?>">
                                                  <label>Tanggal Ujian</label>
                                                    <input type="date" class="form-control" id="" name="hari" value="<?php echo $data1['hari']?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="" placeholder="Ruangan" name="ruangan" value="<?php echo $data1['ruangan']?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="kodepengawas">
                                                      <option value="<?php echo $data1['kodepengawas']?>"><?php echo $data1['nama']?></option>
                                                      <?php
                                                        $query="select * from tbpengawas where kodepengawas not in('$data1[kodepengawas]')";
                                                        $execute=mysqli_query($koneksi,$query);
                                                        while($data=mysqli_fetch_array($execute)){
                                                      ?>
                                                      <option value="<?php echo $data['kodepengawas']?>"><?php echo $data['nama']?></option>

                                                      <?php
                                                        }
                                                      ?>
                                                    </select>
                                                </div>
                                                </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="submit" value="Submit" class="form-control" name="submit">
                                                </div>
                                                </div>
                                      </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                <label>Jam Mulai</label>
                                                    <input type="time" class="form-control" id="" name="jammulai" value="<?php echo $data1['jammulai']?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                <label>Jam Selesai</label>
                                                    <input type="time" class="form-control" id="" name="jamselesai" value="<?php echo $data1['jamselesai']?>">
                                                </div>
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