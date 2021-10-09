<?php 

require_once 'session.php';
require_once 'functions.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Welcome | Rayhan Naufal Arrafi | New </title>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="_template/css/style.css">
        <link rel="stylesheet" href="_template/css/bootstrap.min.css">	
    </head>

    <body>
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                            <img src="_template/img/logo.png" class="brand_logo" alt="Logo">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form_container">

                        <form class="user" method="POST" action="proses_login.php">
                             <div class="input-group mb-2">
                                    <?php if (check_flash_message('sukses')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php get_flash_message() ?>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                              <?php elseif(check_flash_message('gagal')) : ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?php get_flash_message() ?>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                              <?php endif ?>
                            </div>
                            <div class="input-group mb-3">
                                
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control input_user" name="username" aria-describedby="emailHelp" placeholder="Username" autocomplete="off">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control input_pass" name="password" placeholder="Password" autocomplete="off">
                            </div>
                            <!-- <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                            </div> -->
                            <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="button" class="btn login_btn">Login</button>
                    </div>
                        </form>
                    </div>
            
                    <div class="mt-4">
                        <div class="d-flex justify-content-center links">
                            Buat Akun Baru <a href="register.php" class="ml-2">Sign Up</a>
                        </div>
                        <!-- <div class="d-flex justify-content-center links">
                            <a href="#">Forgot your password?</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        
        <footer> 
            <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2021 Copyright:
                    <a href="https://mdbootstrap.com/"> Rayhan Naufal </a>
                </div>
                <!-- Copyright -->
            </footer>

        <script src="_template/js/jquery.js"></script>
        <script src="_template/js/bootstrap.min.js"></script>
    </body>



</html>