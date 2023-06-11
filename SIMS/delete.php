<?php
include_once('db_connect.php');

$sid=$_GET['pId'];

$del_accnt=$conn->query("DELETE tbl_account.*,
tbl_student_profile.*,
tbl_student_info.*
FROM

    tbl_account
    INNER JOIN tbl_student_profile ON tbl_account.accntid = tbl_student_profile.accntid
    INNER JOIN tbl_student_info ON tbl_student_profile.sid = tbl_student_info.sid
WHERE
    tbl_student_info.sid=$sid");
header('location:studentlist.php');

?>
