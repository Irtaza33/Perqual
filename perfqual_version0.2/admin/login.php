<?php include '../partial/config.php';

session_start();
$error = '';
if (isset($_POST['btn_login'])) {
    $user_name = $_POST['user_name'];
    $pass = $_POST['password'];

    $fetch = mysqli_query($conn, "select * from admin where user_name = '" . $user_name . "' AND password = '" . $pass . "' ");
    $show = mysqli_fetch_array($fetch);

    $_SESSION['user_name'] = $show['user_name'];
    $_SESSION['id'] = $show['admin_id'];
    $_SESSION['password'] = $show['password'];

    $row = mysqli_num_rows($fetch); // agar table me value hogi to count bata dega
    if ($row == 1) {
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        $error = "Incorrect Password!";
    }
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <!-- LOGIN MODULE -->
    <div class="login">
        <div class="wrap">
            <!-- TOGGLE -->
            <div id="toggle-wrap">
                <div id="toggle-terms">
                    <div id="cross">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <!-- SLIDER -->
            <div class="content">

                <!-- SLIDESHOW -->
                <div id="slideshow">
                    <div class="one">
                        <h2><img src="../images/logo.png" alt="" style="width: 300px; height: 300px; margin-top: -110px; margin-left: -25px;"></h2>
                    </div>
                    <div class="two">
                        <h2><img src="../images/logo.png" alt="" style="width: 300px; height: 300px; margin-top: -110px; margin-left: -25px;"></h2>
                    </div>
                    <div class="three">
                        <h2><img src="../images/logo.png" alt="" style="width: 300px; height: 300px; margin-top: -110px; margin-left: -25px;"></h2>

                    </div>
                </div>
            </div>
            <!-- LOGIN FORM -->
            <div class="user">
                <div class="form-wrap">
                    <!-- TABS -->
                    <div class="tabs">
                        <h3 class="login-tab"><a class="log-in active" href="#login-tab-content"><span>Login<span></a></h3>
                    </div>
                    <!-- TABS CONTENT -->
                    <div class="tabs-content">
                        <!-- TABS CONTENT LOGIN -->
                        <div id="login-tab-content" class="active">
                            <form class="login-form" method="POST">
                                <input type="text" class="input" name="user_name" placeholder="Email or Username">
                                <input type="password" class="input" name="password" placeholder="Password">

                                <button class="button" name="btn_login">Login</button>
                            </form>
                            <p><?php echo $error; ?></p>


                        </div>
                        <!-- TABS CONTENT SIGNUP -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>