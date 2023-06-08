<html class="perfect-scrollbar-on" lang="en">

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
                                <h4 class="card-title">Data Siswa</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="insertdataujian.php" method="post" class="from-horizontal" role="form">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="nis">
                                                    <option>Siswa</option>
                                                    <?php
                                                        $query="select * from tbsiswa";
                                                        $execute=mysqli_query($koneksi,$query);
                                                        while($data=mysqli_fetch_array($execute)){
                                                    ?>
                                                    <option value="<?php echo $data['nis']?>"><?php echo $data['nama']?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="ruangan" id="ruangan" onChange="findmyvalueruangan()">
                                                    <option>Ruangan</option>
                                                    <?php
                                                        $query="select * from tbjadwal";
                                                        $execute=mysqli_query($koneksi,$query);
                                                        while($data=mysqli_fetch_array($execute)){
                                                    ?>
                                                    <option value="<?php echo $data['ruangan']?>"><?php echo $data['ruangan']?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>

                                            
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="kodemapel" id="kodemapel" onChange="findmyvalue()">
                                                    <option>Mapel</option>
                                                    <?php
                                                        $query="select * from tbmapel";
                                                        $execute=mysqli_query($koneksi,$query);
                                                        while($data=mysqli_fetch_array($execute)){
                                                    ?>
                                                    <option value="<?php echo $data['kodemapel']?>"><?php echo $data['nama']?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                    </select>
                                                    
                                                        
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="hari" id="hari">
                                                    <option>Hari</option>
                                                    <?php
                                                        $query="select * from tbjadwal";
                                                        $execute=mysqli_query($koneksi,$query);
                                                        while($data=mysqli_fetch_array($execute)){
                                                    ?>
                                                    <option value="<?php echo $data['kodejadwal']?>"><?php echo $data['hari']?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                    </select>
                                                    
                                                        
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="jam" id="jam">
                                                    <option>Jam</option>
                                                    <?php
                                                        $query="select * from tbjadwal";
                                                        $execute=mysqli_query($koneksi,$query);
                                                        while($data=mysqli_fetch_array($execute)){
                                                    ?>
                                                    <option value="<?php echo $data['jammulai'].'-'.$data['jamselesai']?>">
                                                    <?php echo date('H.i',strtotime($data['jammulai']))."-".date('H.i',strtotime($data['jamselesai']));?>
                                                    </option>
                                                    <?php
                                                        }
                                                    ?>
                                                    </select>
                                                    
                                                        
                                                </div>
                                            </div>
                                    </div>
                                    <di class="col-md-12">
                                    <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="kodesoal" id="kodesoal" onChange="findmyvalueruangan()">
                                                    <option>Soal</option>
                                                    <?php
                                                        $query="select * from tbsoal";
                                                        $execute=mysqli_query($koneksi,$query);
                                                        while($data=mysqli_fetch_array($execute)){
                                                    ?>
                                                    <option value="<?php echo $data['kodesoal']?>"><?php echo $data['soal']?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
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
                        
                        <div class="row">
                                <div class="col-md-12">
                                  <div class="card ">
                                    <div class="card-header">
                                      <h4 class="card-title">Data Siswa</h4>
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
                                                Nama Siswa
                                              </th>
                                              <th>
                                                Ruangan
                                              </th>
                                              <th>
                                                Tanggal
                                              </th>
                                              <th>
                                                Jam
                                              </th>
                                              <th>
                                                Mata Pelajaran
                                              </th>
                                              <th>
                                                Soal
                                              </th>
                                              <th>
                                                Jawaban
                                              </th>
                                              <th>Status</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                                include("koneksi.php");
                                                $query="select *,tbsiswa.nama as namas,tbmapel.nama as namap from tbujian inner join tbsiswa on tbujian.nis=tbsiswa.nis
                                                inner join tbjadwal on tbujian.kodejadwal=tbjadwal.kodejadwal
                                                inner join tbsoal on tbujian.kodesoal=tbsoal.kodesoal
                                                inner join tbmapel on tbsoal.kodemapel=tbmapel.kodemapel";
                                                $execute=mysqli_query($koneksi,$query);
                                                $i=1;
                                                while($data=mysqli_fetch_array($execute)){
                                            ?>
                                            <tr>
                                              <td><?php echo $i;?></td>
                                              <td>
                                                <?php echo $data['namas']?>
                                              </td>
                                              <td>
                                                <?php echo $data['ruangan'] ?>
                                              </td>
                                              <td>
                                              <?php echo date('l, d M Y',strtotime($data['hari']));?>
                                              </td>
                                              <td>
                                              <?php echo date('H.i',strtotime($data['jammulai']))."-".date('H.i',strtotime($data['jamselesai']));?>
                                              </td>
                                              <td>
                                              <?php echo $data['namap'] ?>
                                              </td>
                                              <td>
                                              <?php echo $data['kodesoal'] ?>
                                              </td>
                                              <td>
                                              <?php echo $data['jawaban'] ?>
                                              </td>
                                              <td>
                                              <?php echo $data['status'] ?>
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