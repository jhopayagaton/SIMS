<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bca556a738.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Password Reset Page</title>

    <style>
        body{
            background-color: lightgray;
        }
        .mt-100{
            margin-top: 100px;
            margin-bottom: 50px;
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
            <div class="col-6 px-5 ">
                <img src="https://www.wealdprofessions.com/images/user/recovery.svg" class="img-fluid">
            </div>
                        <!-- right panel for login form-->
            <div class="col-6 p-5 mt-3">
                <h1 class="text-center display-5">Password Reset</h1>
                <p class="text-center">Please update your password</p>

                <form action="">
                        <!-- container for text boxes, labels, buttons -->
                        <div class="col-9 mx-auto px-3">

                            <div class="form-group mt-5">
                                <label for=""> New Password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group mt-3">
                                <label for=""> Confirm Password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary w-100">
                                        <a href="index.php" class="text-white text-decoration-none">  Update    </a>
                                    </button>
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