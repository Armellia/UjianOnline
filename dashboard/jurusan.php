<html class="perfect-scrollbar-on" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>
       Jurusan
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
                        <a class="navbar-brand" href="javascript:void(0)">Data Jurusan</a>
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
                                <h4 class="card-title">Data Jurusan</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="insertdatajurusan.php" method="post" class="from-horizontal" role="form">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                  <label for="">Nama Jurusan</label>
                                                    <input type="text" class="form-control" id="lastname"
                                                        placeholder="Jurusan" name="jurusan">
                                                </div>
                                            </div>
                                            <br>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="submit" value="Submit" class="form-control" name="submit">
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                  <div class="card ">
                                    <div class="card-header">
                                      <h4 class="card-title">Data Jurusan</h4>
                                    </div>
                                    <div class="card-body">
                                      <div class="table-responsive">
                                        <table class="table tablesorter " id="">
                                          <thead class=" text-primary">
                                            <tr>
                                              <th>
                                                NO
                                              </th>
                                              <th>
                                                Nama Jurusan
                                              </th>
                                              <th>
                                                Action
                                              </th>
                                            </tr>
                                          </thead>
                                          <?php
                                            $query="select * from tbjurusan";
                                            $execute=mysqli_query($koneksi,$query);

                                            $i=1;
                                            while($data=mysqli_fetch_array($execute)){
                                          ?>
                                          <tbody>
                                            <tr>
                                              <td><?php echo $i;?></td>
                                              <td>
                                              <?php echo $data['nama'];?>
                                              </td>
                                              <td>
                                                <a href="jurusanedit.php?kodejurusan=<?php echo $data['kodejurusan']?>">Ubah</a>
                                                 | <a href="proseshapusjurusan.php?kodejurusan=<?php echo $data['kodejurusan']?>" onClick="confirm('Yakin Ingin Menghapus Data?');">
                                                 Hapus</a>
                                              </td>
                                            </tr>
                                            <?php
                                                $i=$i+1;
                                            }
                                            ?>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
        <!-- Buat Scrollbar Test -->
    
    <div class="ps__rail-x" style="left:0px; right:0px; height:402px;">
    	<div class="ps__thumb-x" tabindex="0" style="left:0px; width:0px;">
        </div>
    </div>
    <div class="ps__rail-y" style="top: 522px; right:0px; height:402px;">
    	<div class="ps__thumb-y" tabindex="0" style="top:149px; height:115px; ">
        </div>
    </div>
    <!-- Buat Scrollbar Test -->
    
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