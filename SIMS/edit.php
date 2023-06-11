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
    <title>Edit</title>

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
                <div class="col-4 card p-5">
                    <img src="images/usrimg.jpg" alt="Student Image" class="img-thumbnail rounded-circle img-fluid">
                    
                    <div class="form-group mt-3">
                        <?php
                                if (isset($_SESSION['message']) && $_SESSION['message'])
                                {
                                printf('<b>%s</b>', $_SESSION['message']);
                                unset($_SESSION['message']);
                                }
                        ?>
                        <form method="POST" action="upload.php" enctype="multipart/form-data">
                                <div>
                                    <input type="file" name="uploadedFile" class="form-control" accept="image/*" onchange="loadFile(event)" />
                                    <input type="hidden" name="studId" value="<?=$s['sid'];?>">

                                    <script>
                                        var loadFile = function(event) {
                                            var output = document.getElementById('usrImg');
                                            output.src = URL.createObjectURL(event.target.files[0]);
                                            output.onload = function() {
                                             }
                                        };
                                    </script>
                                </div>

                                <input type="submit" name="uploadBtn" value="Upload" class="btn btn-success form-control mt-2" />
                        </form>
                    </div>
                </div>

                <div class="col-7 card p-5 mx-4">
                <form action="update.php" method="POST">
                    <div class="form-group">
                        <label>Student ID #</label>
                        <input type="text" value="<?=$s['sid'];?>" class="form-control"  name="studId" readonly>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                                <div class="form-group">
                                        <label">First name</label>
                                        <input type="text" value="<?=$s['fname'];?>" class="form-control" name="fname">
                                </div>
                        </div>
                        <div class="col">
                                <div class="form-group">
                                        <label">Last name</label>
                                        <input type="text" value="<?=$s['lname'];?>" class="form-control" name="lname">
                                </div>
                         </div>
                    </div> <!-- ROW -->

                    <div class="form-group mt-3">
                        <label>Email Address</label>
                        <input type="text" value="<?=$s['emailadd'];?>" class="form-control" name="emailAdd">
                    </div>

                    <div class="form-group mt-3">
                        <label>Contact Number</label>
                        <input type="text" value="<?=$s['mobile_no'];?>" class="form-control" name="mobileNo">
                    </div>

                    <div class="form-group mt-3">
                        <label>Date of Birth</label>
                        <input type="text" value="<?php $d=date_create($s['date_of_birth']); echo date_format($d, "F d, Y"); ?>" class="form-control" name="dob">
                    </div>

                    <div class="form-group mt-3">
                        <label>Home Address</label>
                        <input type="text" value="<?=$s['address'];?>" class="form-control" name="homeAdd">
                    </div>

                    <div class="form-group mt-3">
                        <label>Course </label>
                        <select name="cid" class="form-control">
                            <option value="">--Select Course--</option>
                            <?php
                                $qry_course = $conn->query('SELECT * FROM tbl_course');
                                $course=$qry_course->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($course as $crs) {
                                ?>
                                <option value="<?=$crs['courseid']?>"><?=$crs['course_desc']?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <input type="submit" value="Update Record" class="btn btn-success float-end">
                        <button class="btn btn-danger float-end mx-2" onclick="window.location.href='studentlist.php'">Cancel</button>
                    </div>


                    </form>
                </div> <!-- col-7 -->
        </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
}else{
    header('location:index.php');
}
?>