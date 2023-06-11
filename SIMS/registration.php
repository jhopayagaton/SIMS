<?php
    include_once('db_connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bca556a738.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Registration Page</title>

    <style>
        body{
            background-color: lightgray;
        }
        .mt-100{
            margin-top: 100px;
            margin-bottom: 100px;
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
            </div>
                        <!-- right panel for login form-->
            <div class="col-6 py-3">
                <h1 class="text-center display-5">Register an account</h1>
                <p class="text-center">Please fill out the form to register</p>

                <form action="registration_process.php" method="post" autocomplete="off">
                        <!-- container for text boxes, labels, buttons -->
                        <div class="col-12 px-3 mx-auto mt-5">

                            <div class="row">
                                <div class="form-group mb-2">
                                        <input type="text" name="sid" placeholder="Student ID Number" class="form-control">
                                </div>

                                <div class="col">
                                  <input type="text" name="fname" class="form-control" placeholder="First name" >
                                </div>

                                <div class="col">
                                  <input type="text" name="lname" class="form-control" placeholder="Last name" >
                                </div>
                              </div>

                            <div class="form-group mt-2">
                                    <input type="date" name="dob" placeholder="Birthday" class="form-control">
                            </div>

                            <div class="form-group mt-2">
                                    <input type="text" name="homeAdd" placeholder="Home Address" class="form-control">
                            </div>

                            <div class="form-group mt-2">
                                <input type="email" name="emailAdd" class="form-control" id="floatingInput" placeholder="Email Address">
                            </div>

                            <div class="form-group mt-2">
                                <input type="text" name="phoneNo" class="form-control" id="floatingInput" placeholder="Phone Number">
                            </div>

                            <div class="row">
                                <div class="col mt-2">
                                  <input type="password" name="pass1" class="form-control" placeholder="Password" >
                                </div>
                                <div class="col mt-2">
                                  <input type="password" name="pass2" class="form-control" placeholder="Confirm Password" >
                                </div>
                              </div>

                              <div class="form-group mt-3">
                                    <select name="cid" class="form-control" >
                                        <option value="">--Select Course--</option>
                                        <!-- queries for courses-->
                                        <?php
                                            $qry_course = $conn->query('SELECT * FROM tbl_course');
                                            $course=$qry_course->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($course as $crs){
                                            ?>
                                            <option value="<?=$crs['courseid']?>"><?=$crs['course_desc']?></option>
                                            <?php
                                            }
                                        ?>
                                    </select>
                            </div>

                            <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary w-100"> Create your account </button>
                            </div>


                        </div>
                </form>
            </div>
                    <!-- end of right panel -->
        </div>  
    </div>
</body>
</html>