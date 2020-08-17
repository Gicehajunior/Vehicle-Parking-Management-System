<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['signup']))
{
    $adminuser=$_POST['username'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $password=md5($_POST['password']);
    $passwordConfirm=md5($_POST['password-confirm']);
    $AdminRegdate = date('Y-m-d h:i:s');
    if($password !== $passwordConfirm){
        echo "<script>alert('Password mismatch. Please try again.');</script>";
    }
    else{
        $query=mysqli_query($con, "insert into  tbladmin(AdminName, UserName, MobileNumber, Email, Password, AdminRegdate) value('Admin', '$adminuser', '$tel', '$email', '$password', '$AdminRegdate')");
    
        if($query){
            echo "<script>alert('Signup Successfull');</script>";
            echo "<script>window.location.href ='index.php'</script>";
        }
        else{
            echo "<script>alert('Something Went Wrong with signing up. Please try again.');</script>";
        }
    }
    
}
?>
<!doctype html>
 <html class="no-js" lang="">
<head>
    
    <title>VPMS-Login Page</title>
   

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <h2 style="color: #fff">Vehicle Parking Management System</h2>
                    </a>
                </div>
                <div class="login-form">
                    <h2 class="text-center">Sign Up</h2>
                    <form method="post">  
                        <div class="form-group">
                            <label>User Name</label>
                            <input class="form-control" type="text" placeholder="Username" required="true" name="username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" placeholder="Email" required="true" name="email">
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <input class="form-control" type="tel" maxlength="12" placeholder="Telephone Number" required="true" name="tel">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required="true">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="password-confirm" placeholder="Re-enter Password" required="true">
                        </div>
                        
                        <button type="submit" name="signup" class="btn btn-success btn-flat m-b-30 m-t-30">Signup</button> 
                    </form>
                    <div class="form-group pt-3">
                        Sign in <a href="index.php">here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>








