<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soal</title>
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
        <div class="margin" style="margin: 2px 2px 2px 2px;">
        <form action="simpanjawaban.php" method="post">
            <div class="row">
                <?php
                    include("../dashboard/koneksi.php");
                    session_start();
                    $nis=$_SESSION['nis'];
                    $query="SELECT * FROM `tbujian` inner join tbsiswa on tbujian.nis=tbsiswa.nis 
                    inner join tbsoal on tbujian.kodesoal=tbsoal.kodesoal where tbujian.nis='$nis' and status=0";
                    $execute=mysqli_query($koneksi,$query);
                    if(mysqli_num_rows($execute)==0){
                    ?>
                    Semua soal sudah dijawab <br>
                        <a href="code.php"><input type="button" value="Selesai" class="btn btn-success"></a>
                    <?php
                    }
                    else{
                    $i=1;
                    while($row=mysqli_fetch_array($execute)){

                    
                ?>
                <div class="col-md-12">
                    <p><?php echo $i.". ".$row['soal'];?></p>
                    <input type="hidden" name="kodesoal<?php echo $i;?>" value="<?php echo $row['kodesoal'];?>">
                    <div class="col-md-6">
                        <input type="radio" name="jawaban<?php echo $i;?>" id="" value="<?php echo $row['jawaban1'];?>">A. <?php echo $row['jawaban1'];?>
                        <input type="radio" name="jawaban<?php echo $i;?>" id="" value="<?php echo $row['jawaban2'];?>">B. <?php echo $row['jawaban2'];?>
                    </div>
                    <div class="col-md-6">
                        <input type="radio" name="jawaban<?php echo $i;?>" id="" value="<?php echo $row['jawaban3'];?>">C. <?php echo $row['jawaban3'];?>
                        <input type="radio" name="jawaban<?php echo $i;?>" id="" value="<?php echo $row['jawaban4'];?>">D. <?php echo $row['jawaban4'];?>
                    </div>
                </div>
                <?php
                    $i=$i+1;
                    }
                
                ?>
                
                
                </div>
                
                <div class="col-md-6">
                    <input type="submit" value="Selesai" class="btn btn-success">
                </div>
                <?php
                    }
                ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>