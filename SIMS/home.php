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
    <title>Home Page</title>

    <style>
        .mt-150{
            margin-top: 150px;
        }
        .mL{
            margin-left: 5px;
        }
    </style>
</head>
<body>
      <!-- NAVIGATION BAR -->
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
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
}else{
    header('location:index.php');
}
?>