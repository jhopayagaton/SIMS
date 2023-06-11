<?php
session_start();
if(isset($_SESSION['success'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/bca556a738.js" crossorigin="anonymous"></script>
</head>
<body>
    <script src="js/bootstrap.bundle.min.js"></script>  
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
                        <div class="float-start">
                                <i class="fab fa-soundcloud text-info"></i> &nbsp;
                                <i class="text-white lead">Student Information Management System</i>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bstarget="#navbarSupportedContent" aria-controls="navbarSupportedContent" ariaexpanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                        </div>  
                <div class="float-end">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active text-white" aria-current="page" href="home.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="studentlist.php">Student List</a>
                                </li>
                                <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <?php
                                                        include_once('db_connect.php');
                                                        $qry_usr=$conn->query("SELECT
                                                        tbl_account.accntid,
                                                        tbl_student_info.fname
                                                FROM
                                                        tbl_account
                                                    INNER JOIN tbl_student_profile ON tbl_account.accntid = tbl_student_profile.accntid
                                                    INNER JOIN tbl_student_info ON tbl_student_info.sid = tbl_student_profile.sid WHERE tbl_account.accntid =".$_SESSION['id']);
                                                    $usr=$qry_usr->fetch(PDO::FETCH_ASSOC);
                                                    echo $usr['fname'];
                                                    ?>
                                             </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                                            <li><a class="dropdown-item" href="accountsettings.php">Account Settings</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                        </ul>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        </nav>
        


            <div class="container mt-5">
                <div class="row mb-3">
                    <div class="col">
                        <div class="float-end">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addRecord">Add New Record</button>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                                <th>ID #</th>
                                <th>Student Name</th>
                                <th>Course</th>
                                <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>
                            <?php
                                $qry=$conn->query('SELECT
                                tbl_student_info.sid,
                                tbl_student_info.fname,
                                tbl_student_info.lname,
                                tbl_course.course_desc 
                            FROM
                                tbl_course
                                INNER JOIN tbl_student_profile ON tbl_course.courseid = tbl_student_profile.courseid 
                                INNER JOIN tbl_student_info ON tbl_student_profile.sid = tbl_student_info.sid');
                                $fetch=$qry->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($fetch as $stud) {
                                ?>
                            <tr>
                                    <td><?=$stud['sid']?></td>
                                    <td><?=$stud['fname'].' '.$stud['lname']?></td>
                                    <td><?=$stud['course_desc']?></td>
                                    <td>
                                            <a href="view.php?pId=<?=$stud['sid'];?>"><button class="btn btn-info"><i class="fas fa-eye"></i></button></a>
                                            <a href="edit.php?pId=<?=$stud['sid'];?>"><button class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                                            <a href="delete.php?pId=<?=$stud['sid'];?>"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></a>
                                    </td>
                            </tr>
                          <?php  
                               }
                          ?>
                    </tbody>
                </table>
            </div>

            <div class="modal fade" id="addRecord" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Add New Record</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="add_process.php" method="post">

                        <div class="modal-body">
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
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                <input type="submit" class="btn btn-success" name="addBtn" value="AddRecord">
                        </div>

                        </form>
                    </div>
                </div>
            </div>

</body>
</html>
<?php
}else{
    header('location:index.php');
}
?>