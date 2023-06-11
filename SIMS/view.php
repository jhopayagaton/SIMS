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
    
    <script src="https://kit.fontawesome.com/bca556a738.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>View</title>

    <style>
        .fa{
            width: 100px !important;
            padding: 10px;
        }
        .fa-facebook{
            background: #3B5998;
            color: white;
        }
        .fa-twitter{
            background: #55ACEE;
            color: white;
        }
        .fa-google{
            background: #dd4b39;
            color: white;
        }
    </style>
</head>
<body>
<script src="js/bootstrap.bundle.min.js"></script>

<?php
include_once('db_connect.php');
$sid=$_GET['pId'];
$i=$conn->query("SELECT
tbl_student_info.fname,
tbl_student_info.lname,
tbl_student_info.photo,
tbl_student_info.emailadd,
tbl_student_info.mobile_no,
tbl_student_info.date_of_birth,
tbl_student_info.address,
tbl_course.course_code,
tbl_course.course_desc,
tbl_student_profile.sid
FROM
tbl_student_profile
INNER JOIN tbl_student_info ON tbl_student_profile.sid=tbl_student_info.sid
INNER JOIN tbl_course ON tbl_student_profile.courseid=tbl_course.courseid WHERE tbl_student_profile.sid=$sid");
$s=$i->fetch(PDO::FETCH_ASSOC);

?>

<div class="container mt-5">
        <button class="btn btn-primary" onclick="window.location.href='studentlist.php'"><i class="fas fa-arrow-left"></i> Go Back</button>
        <div class="row p-5">
                <div class="col-4 card text-center p-5">
                    <img src="images/usrimg.jpg" alt="Student Image" class="img-thumbnail rounded-circle img-fluid">
                    <p class="display-6 mt-4 mb-0"><?=$s['fname']." ".$s['lname']?></p>
                    <p class="h6 mt-2"><?=$s['course_desc']?></p>
                    <div class="form-group text-center mt-2">
                            <i class="fa fa-facebook text-white w-25 "></i>
                            <i class="fa fa-twitter text-white w-25 "></i>
                            <i class="fa fa-google text-white w-25 "></i>
                    </div>
                </div>

                <div class="col-7 card p-5 mx-4">
                    <div class="form-group">
                        <label>Student ID #</label>
                        <input type="text" value="<?=$s['sid'];?>" class="form-control" readonly>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                                <div class="form-group">
                                        <label">First name</label>
                                        <input type="text" value="<?=$s['fname'];?>" class="form-control" readonly>
                                </div>
                        </div>
                        <div class="col">
                                <div class="form-group">
                                        <label">Last name</label>
                                        <input type="text" value="<?=$s['lname'];?>" class="form-control" readonly>
                                </div>
                         </div>
                    </div> <!-- end of name -->

                    <div class="form-group mt-3">
                        <label>Email Address</label>
                        <input type="text" value="<?=$s['emailadd'];?>" class="form-control" readonly>
                    </div>

                    <div class="form-group mt-3">
                        <label>Contact Number</label>
                        <input type="text" value="<?=$s['mobile_no'];?>" class="form-control" readonly>
                    </div>

                    <div class="form-group mt-3">
                        <label>Date of Birth</label>
                        <input type="text" value="<?php $d=date_create($s['date_of_birth']); echo date_format($d, "F d,Y")?>" class="form-control" readonly>
                    </div>

                    <div class="form-group mt-3">
                        <label>Home Address</label>
                        <input type="text" value="<?=$s['address'];?>" class="form-control" readonly>
                    </div>

                </div> <!-- end of student info column -->
        </div>
</div>

</body>
</html>

<?php
}else{
    header('location:index.php');
}
?>