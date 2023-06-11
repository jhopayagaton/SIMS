<?php
    include_once( 'db_connect.php' );

    $sid = $_POST[ 'sid' ];
    $fname = $_POST[ 'fname' ];
    $lname = $_POST[ 'lname' ];
    $email = $_POST[ 'emailAdd' ];
    $phone = $_POST[ 'phoneNo' ];
    $pass1 = $_POST[ 'pass1' ];
    $pass2 = $_POST[ 'pass2' ];
    $dob = $_POST[ 'dob' ];
    $homeAdd = $_POST[ 'homeAdd' ];
    $accntId = mt_rand();
    $course = $_POST['cid'];

    $qry_stud_info= "INSERT INTO tbl_student_info (sid, fname, lname, emailadd, mobile_no, date_of_birth, address ) 
                                 VALUES (:studId, :fname, :lname, :email, :mobile, :dob, :homeAdd)";
    $stmt_info= $conn->prepare($qry_stud_info);
    $bind_info=[':studId' => $sid,
                        ':fname' => $fname,
                        ':lname' => $lname,
                        ':email' => $email,
                        ':mobile' => $phone,
                        ':dob' => $dob,
                        ':homeAdd' => $homeAdd];
    $stmt_info->execute($bind_info);

    $qry_accnt= "INSERT INTO tbl_account(accntid, usrname, pssword, status, type) 
                         VALUES(:accntId, :usr, :pss, :stats, :accntType)";
    $stmt_accnt= $conn->prepare($qry_accnt);
    $bind_accnt= ['accntId'=>$accntId,
                            ':usr'=>$email,
                            ':pss'=>SHA1($pass1),
                            ':stats'=>1,
                            ':accntType'=>'Student'];
    $stmt_accnt->execute($bind_accnt);

    $qry_profile= "INSERT INTO tbl_student_profile (profileid, accntid, sid, courseid) 
    VALUES(:pid, :aid, :studId, :cid)";
    $stmt_profile= $conn->prepare($qry_profile);
    $bind_profile= [':pid'=>mt_rand(),
                            ':aid'=>$accntId,
                            ':studId'=>$sid,
                            ':cid'=>$course];
   $stmt_profile->execute($bind_profile);
header('location:success.php');

  // echo "<br> <br>";
    // echo $fname." ".$lname."<br>";
    // echo $email."<br>".$phone."<br>";
    // echo $pass1."<br>".$pass2;
?>