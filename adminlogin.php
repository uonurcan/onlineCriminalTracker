<?php
ob_start();
$title = "Login";
require 'connection.php';
include 'csslinks.php';
include 'functions.php';

redirectisuserlogin();
if (isset($_POST['submit'])) {
    $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
    $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));

    $q = 'select password from admin where username=?';
    $st = mysqli_stmt_init($db);
    mysqli_stmt_prepare($st, $q) or exit('Query error');
    mysqli_stmt_bind_param($st, 's', $username) or exit('Binding error');
    mysqli_stmt_execute($st) or exit('Query execution failed');
    mysqli_stmt_bind_result($st, $pwd) or exit('Result storage fail');

    if (mysqli_stmt_fetch($st)) {
        if (password_verify($password, $pwd)) {


            mysqli_stmt_free_result($st);
            mysqli_stmt_close($st);

            $row = getuser($db, $username); //GET ADMİN DATA

            session_start();
            $_SESSION['userlogin'] = "OK";
            $_SESSION['userdata'] = $row;


            header('location:admin');
        } else { // wrong password
            echo "password is wrong<br/>";
        }
    } else { // wrong username
        echo "Username is wrong<br/>";
    }

    //mysqli_stmt_free_result($st);
    //mysqli_stmt_close($st);
    mysqli_close($db);
}
?>



<body class="bg-gradient-primary" style="background: var(--bs-gray-100);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image " style="background: url(&quot;adminitems/assets/img/1-removebg-preview.jpg&quot;) center no-repeat;"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Criminal Tracker Admin Panel</h4>
                                    </div>

                                    <form class="user" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" required id="email" type="text" aria-describedby="emailHelp" placeholder="Enter Username... (admin)" name="username">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" required type="password" id="password" placeholder="Password (admin)" name="password">
                                        </div>
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small"></div>
                                        </div>
                                        <button class="btn d-block btn-user w-100" name="submit" type="submit" style="background: #8a24b1;color: rgb(255,255,255);font-size: 20px;">Login</button>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" data-bs-target="#forgotpassword" data-bs-toggle="modal" href="#">Forgot Password?</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!--Modal for Forgot Passwords -->
        <div class="modal fade" role="dialog" tabindex="-1" id="forgotpassword">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color: #8a24b1;">Password Reset</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Please apply to Police Office</p>
                    </div>
                    <div class="modal-footer"><button class="btn btn-dark" type="button" data-bs-dismiss="modal">Exit</button></div>
                </div>
            </div>
        </div>

        <?php
        include 'footeradmin.php';
        ?>