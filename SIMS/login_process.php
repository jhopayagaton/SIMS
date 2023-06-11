<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" >

    <script>
        function LoginSuccess(){
            Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'Welcome to SIMS'

                }).then(function(){
                window.location="home.php";
                })
        }

        function LoginFailed(){
            Swal.fire({
            icon: 'error',
            title: 'Ooops!',
            text: 'Invalid Email or Password'

                }).then(function(){
                window.location="index.php";
                })
        }

        function LoginFirst(){
            Swal.fire({
            icon: 'warning',
            title: 'Warning!',
            text: 'I know what you are doing. Log in first'

                }).then(function(){
                window.location="index.php";
                })
        }

        if(!empty($_POST['btnLogin'])){
                // login process goes here
        }else{
            echo '<script>LoginFirst();</script>';
        }
    </script>

</head>
<body>
    
<?php
    include_once 'db_connect.php';
    $user = $_POST['txtuser'];
    $pass = SHA1($_POST['txtpass']);


    $qry=$conn->prepare("SELECT * FROM tbl_account WHERE usrname=:user AND pssword=:pass");
    $qry_data=[':user'=>$user, ':pass'=>$pass];
    $qry->execute($qry_data);
    $fetch=$qry->fetch(PDO::FETCH_ASSOC);


    $row=$qry->rowCount();
    if($row<>0){
        session_start();
        $_SESSION['success']=true;
        $id=$fetch['accntid'];
        $_SESSION['id']=$id;
        header('location:home.php');

    }else{
        $_SESSION['error']=true;
        header('location:index:php');
    }
?>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>




    