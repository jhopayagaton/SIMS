<?php
include_once('db_connect.php');

$sid = $_POST['studId'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['emailAdd'];
$phone = $_POST['mobileNo'];
$dob = $_POST['dob'];
$homeAdd = $_POST['homeAdd'];
$course = $_POST['cid'];

$qry=$conn->prepare("UPDATE tbl_student_info SET fname=:fname, lname=:lname, emailadd=:emailAdd,
mobile_no=:mobileNo, date_of_birth=:dob, address=:homeAdd WHERE sid=:stuId");
$qry_bind=[':stuId'=>$sid,
                    ':fname'=>$fname,
                    ':lname'=>$lname,
                    ':emailAdd'=>$email,
                    ':mobileNo'=>$phone,
                    ':dob'=>$dob,
                    ':homeAdd'=>$homeAdd];
$qry->execute($qry_bind);
header('location:edit.php?pId='.$sid);

?>

