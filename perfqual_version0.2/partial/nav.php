<?php include 'config.php';
session_start();



// Check if the user is logged in
if (isset($_GET['logout'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    echo "<script>window.location.href = 'index.php';</script>";
} else {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PerfQual</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/flaticon.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />

    <link rel="stylesheet" type="text/css" href="styles/network_responsive.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script nonce="856d79c4-957c-427b-8ed0-e8118ac00326">
        (function(w, d) {
            ! function(t, u, v, w) {
                t[v] = t[v] || {};
                t[v].executed = [];
                t.zaraz = {
                    deferred: [],
                    listeners: []
                };
                t.zaraz.q = [];
                t.zaraz._f = function(x) {
                    return async function() {
                        var y = Array.prototype.slice.call(arguments);
                        t.zaraz.q.push({
                            m: x,
                            a: y
                        })
                    }
                };
                for (const z of ["track", "set", "debug"]) t.zaraz[z] = t.zaraz._f(z);
                t.zaraz.init = () => {
                    var A = u.getElementsByTagName(w)[0],
                        B = u.createElement(w),
                        C = u.getElementsByTagName("title")[0];
                    C && (t[v].t = u.getElementsByTagName("title")[0].text);
                    t[v].x = Math.random();
                    t[v].w = t.screen.width;
                    t[v].h = t.screen.height;
                    t[v].j = t.innerHeight;
                    t[v].e = t.innerWidth;
                    t[v].l = t.location.href;
                    t[v].r = u.referrer;
                    t[v].k = t.screen.colorDepth;
                    t[v].n = u.characterSet;
                    t[v].o = (new Date).getTimezoneOffset();
                    if (t.dataLayer)
                        for (const G of Object.entries(Object.entries(dataLayer).reduce(((H, I) => ({
                                ...H[1],
                                ...I[1]
                            })), {}))) zaraz.set(G[0], G[1], {
                            scope: "page"
                        });
                    t[v].q = [];
                    for (; t.zaraz.q.length;) {
                        const J = t.zaraz.q.shift();
                        t[v].q.push(J)
                    }
                    B.defer = !0;
                    for (const K of [localStorage, sessionStorage]) Object.keys(K || {}).filter((M => M.startsWith("_zaraz_"))).forEach((L => {
                        try {
                            t[v]["z_" + L.slice(7)] = JSON.parse(K.getItem(L))
                        } catch {
                            t[v]["z_" + L.slice(7)] = K.getItem(L)
                        }
                    }));
                    B.referrerPolicy = "origin";
                    B.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(t[v])));
                    A.parentNode.insertBefore(B, A)
                };
                ["complete", "interactive"].includes(u.readyState) ? zaraz.init() : t.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body>
    <div class="super_container">

        <header class="header d-flex flex-row">
            <div class="header_content d-flex flex-row align-items-center">

                <div class="logo_container" style="width: 30%;">
                    <div class="logo">
                        <a href="index.php"><img width="35%" src="images/logo.png" alt></a>
                    </div>
                </div>

                <nav class="main_nav_container">
                    <div class="main_nav">
                        <ul class="main_nav_list">
                            <li class="main_nav_item"><a href="index.php">home</a></li>
                            <li class="main_nav_item"><a href="aboutus.php">about us</a></li>
                            <li class="main_nav_item"><a href="template.php">Templates</a></li>
                            <li class="main_nav_item"><a href="video.php">Videos</a></li>
                            <li class="main_nav_item"><a href="blog.php">Blog</a></li>
                            <li class="main_nav_item"><a href="network.php">Networking</a> </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="header_side d-flex flex-row justify-content-center align-items-center">
                <div style="text-align: center;">
                    <span style="color:white"><img src="images/email-svgrepo-com.svg" style="width: 15px;margin-top: -1px;" alt> &nbsp;info@perfqual.com</span>
                    <?php if (isset($_SESSION['id']) != "") { ?>
                        <a href="?logout" style="color:white;font-weight:500;font-size:20px;">&nbsp;&nbsp;&nbsp;Logout <i class="fa-regular fa-user"></i></a>

                    <?php } else { ?>
                        <a href="login1.php" style="color:white;font-weight:500;font-size:20px;">&nbsp;&nbsp;&nbsp;Login <i class="fa-regular fa-user"></i></a>
                    <?php } ?>
                </div>
            </div>

            <div class="hamburger_container">
                <i class="fas fa-bars trans_200"></i>
            </div>
        </header>

        <div class="menu_container menu_mm">

            <div class="menu_close_container">
                <div class="menu_close"></div>
            </div>

            <div class="menu_inner menu_mm">
                <div class="menu menu_mm">

                    <ul class="main_nav_list">
                        <li class="menu_item menu_mm"><a href="index.php">Home</a></li>
                        <li class="menu_item menu_mm"><a href="aboutus.php">About us</a></li>
                        <li class="menu_item menu_mm"><a href="template.php">Templates</a></li>
                        <li class="menu_item menu_mm"><a href="video.php">Videos</a></li>
                        <li class="menu_item menu_mm"><a href="blog.php">Blog</a></li>
                        <li class="menu_item menu_mm"><a href="network.php">Networking</a> </li>
                        <?php if (isset($_SESSION['id']) != "") { ?>
                            <li class="menu_item menu_mm"><a href="?logout">Logout</a> </li>

                        <?php } else { ?>

                            <li class="menu_item menu_mm"><a href="login1.php">Login</a> </li>
                        <?php } ?>

                    </ul>

                    <div class="menu_social_container menu_mm">
                        <ul class="menu_social menu_mm">
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>