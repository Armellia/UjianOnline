<?php
include 'con_db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
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
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    <form action="proses_login.php" method="post">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Username</span>
                                    </div>
                                    <input type="text" class="form-control col-sm-3" placeholder="" id="usr"
                                        name="username">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Password</span>
                                    </div>
                                    <input type="password" class="form-control col-sm-3" placeholder="" id="usr"
                                        name="password">
                                </div>
                            </div>
                            <div class="col-md-6">
                               <a href="">Forget Password or Username?</a>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" value="Submit">Submit</button>
                    </form>
                </div>
                <div class="card-footer">
                    <p>Copyright by Uon</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <footer>
       

        </div>
    </footer>
    <!-- End Nabvar -->
</body>

</html>