<?php
session_start();
include 'partial/config.php';


if(isset($_POST['btn_submit'])){
    $full_name = $_POST['full_name'];
    $organization_name = $_POST['organization_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_no = $_POST['phone_no'];
    $date = $_POST['date'];
    $insert = "INSERT INTO `user`(`full_name`, `organization_name`, `email`, `password`,`phone_no`,`date`)
    VALUES ('$full_name','$organization_name','$email','$password','$phone_no','$date')";

    $result = mysqli_query($conn, $insert);
    echo "<script>window.location.href = 'login.php';</script>";
}
$error = "";

if(isset($_POST['btn_signin'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
   
    $fetch = mysqli_query($conn,"select * from user where email = '".$email."' AND password = '".$pass."' ");
    $show = mysqli_fetch_array($fetch);
    
    $_SESSION['name'] = $show['full_name'];
    $_SESSION['id'] = $show['Id'];
    $_SESSION['email'] = $show['email'];
    
    $row = mysqli_num_rows($fetch); // agar table me value hogi to count bata dega
    if($row == 1){
        echo "<script>window.location.href = 'index.php';</script>";
    }else{
        $error = "Incorrect Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./styles/login.css">
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>QPML</title>
</head>
<style>
        #closeButton {
            position: fixed;
            top: 20px;
            right: 40px;
            font-size: 50px;
            cursor: pointer;
            z-index: 9999;
            color:white;
            transition: font-size 0.5s ease-in-out;
        }
    </style>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="Post">
                <h1>Create Account</h1>
               
                <span>use your email for registeration</span>
                <input required type="text" placeholder="Name" name="full_name">
                <input required type="text" placeholder="Organization" name="organization_name">
                <input required type="email" placeholder="Email" name="email">
                <input required type="email" placeholder="Password" name="email">
                <input required type="text" placeholder="Phone Number" name="phone_no">
                <input required type="date" placeholder="Date" name="date">
                 <button name="btn_submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="POST">
                <h1>Sign In</h1>
                <span> use your email password</span>
                <input type="email" name="email" required placeholder="Email">
               
                          <input type="password" required name="password" id="passwordInput"  class="form-style" placeholder="Your Password" autocomplete="off" >
                          <i class="input-icon uil uil-lock-alt " ><i class="eyeshow "  id="togglePassword">
                           <iconify-icon icon="codicon:eye-closed"></iconify-icon>
                        </i> </i>
                       
                <!-- <a href="#">Forget Your Password?</a> -->
                <button name="btn_signin" >Sign In</button>
                <p style="color:red" ><?php echo $error; ?></p>

            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1><img src="images/logo.png" alt="" style="width: 40%;"></h1>
                    <p style="margin-top: -10px;">Enter your personal details to use site </p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1><img src="images/logo.png" alt="" style="width: 40%;"></h1>
                    <p style="margin-top: -10px;">Register with your personal details to use site</p>
                    <button class="hidden" id="register" >Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/login.js"></script>
    <script src="./js/eyeshow.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const closeButton = document.createElement("div");
            closeButton.innerHTML = "&times;";
            closeButton.id = "closeButton";
            document.body.appendChild(closeButton);

            closeButton.addEventListener("click", function () {
                window.location.href = 'index.php';
            });

            document.getElementById("login").addEventListener("click", function () {
                document.getElementById("container").classList.add("");
            });
        });
    </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
 <!-- script start -->
  <!-- script end -->

</html>