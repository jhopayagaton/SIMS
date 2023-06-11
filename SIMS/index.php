<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bca556a738.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login Page</title>

    <style>
        body{
            background-color: lightgray;
        }
        .mt-100{
            margin-top: 100px;
        }
        .btnCorner{
            border-radius: 0px;
        }
    </style>
</head>

<body>
    <div class="container card mt-100">
        <div class="row mt-100 ">
                    <!-- left panel for image-->
            <div class="col-6 p-5">
                <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" class="img-fluid">
                <a href="registration.php" class="text-black bg-white text-center text-decoration-none">    <h2 class="mt-5">Create an account</h2>  </a>
            </div>
                        <!-- right panel for login form-->
            <div class="col-6 p-3">
                <h1 class="text-center display-5">Welcome Back</h1>
                <p class="text-center">Please login to access your account</p>

                <form action="login_process.php" method="post" autocomplete="off">
                        <!-- container for text boxes, labels, buttons -->
                        <div class="col-9 mx-auto px-3">

                            <div class="form-group mt-5">
                                <label for=""> Email Address</label>
                                <input type="email" name="txtuser" class="form-control">
                            </div>

                            <div class="form-group mt-3">
                                <label for=""> Password</label>
                                <input type="password" name="txtpass" class="form-control">
                            </div>

                            <div class="form-group">
                                <div class="col float-start mt-2">
                                    <input type="checkbox" class="form-check-input">
                                    <label for=""> Remember me</label>
                                </div>
                            </div>

                            <div class="col float-end mt-1">
                                <a href="reset.php">Forgot password?</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="form-group mt-3">
                                    <!-- <button type="submit" class="btn btn-primary w-100">
                                        <a href="home.php" class="text-white text-decoration-none"> Login</a>
                                    </button> -->
                                    <input type="submit" name="btnLogin" class="btn-primary w-100" value="Login">
                            </div>

                            <div class="form-group mt-4 mb-3 " >
                                <div class="text-center">
                                        <label for="" class="text-center mb-3">or sign in using</label> <br>
                                        <button class="fa fa-facebook btn btn-primary px-5 btnCorner"></button>
                                        <button class="fa fa-twitter btn btn-info px-5 btnCorner text-light"></button>
                                        <button class="fa fa-google btn btn-danger px-5 btnCorner"></button>
                                </div>
                            </div>

                        </div>
                </form>
            </div>
                    <!-- end of right panel -->
        </div>  
    </div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>