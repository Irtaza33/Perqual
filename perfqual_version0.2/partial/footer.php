<?php 
include 'config.php';
include 'mail_function.php';


if(isset($_POST['btn_email'])){
    $email = $_POST['email'];
    $admin_email = "hmmadjamil@gmail.com";
    $sub = "New Subsciber";
    $message_body = "<b> $email, Subscribed to PERFQUAL</b>";

    $mail_status = smtp_mailer($admin_email, $sub, $message_body);
}


?>

<footer class="footer">
    <div class="container">

        <div class="newsletter">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Subscribe to newsletter</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="newsletter_form_container mx-auto">
                        <form method="POST">
                            <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                <input id="newsletter_email" class="newsletter_email" type="email" name="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                <button id="newsletter_submit" name="btn_email" class="newsletter_submit_btn trans_300" >Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_content">
            <div class="row">

                <div class="col-lg-4 footer_col">

                    <div class="logo_container">
                        <div class="logo">
                            <img width="20%" src="images/logo.png" alt>
                            <span>PerfQual</span>
                        </div>
                    </div>
                    <p class="footer_about_text">A literature review highlighted the domains where more research is required before develop- ing the required QM framework for the assess- ment of the quality performance of APMs.</p>
                </div>

                <div class="col-lg-4 footer_col">
                    <div class="footer_column_title">Menu</div>
                    <div class="footer_column_content">
                        <ul class="main_nav_list">
                            <li class="footer_list_item"><a href="index.php">Home</a></li>
                            <li class="footer_list_item"><a href="aboutus.php">About us</a></li>
                            <li class="footer_list_item"><a href="template.php">Templates</a></li>
                            <li class="footer_list_item"><a href="video.php">Video</a></li>
                            <li class="footer_list_item"><a href="blog.php">Blog</a></li>
                            <li class="footer_list_item"><a href="network.php">Networking</a> </li>
                        </ul>
                    </div>
                </div>

          
                <div class="col-lg-4 footer_col">
                    <div class="footer_column_title">Contact</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/placeholder.png" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                University Road Karachi,Pakistan
                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/smartphone.png" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                +92 334 3137166
                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/envelope.png" alt="https://www.flaticon.com/authors/lucy-g">
                                </div><a href="#"class="__cf_email__">info@perfqual.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
            <div class="footer_copyright">
                <span>
                    Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved 
                </span>
            </div>
            <div class="footer_social ml-sm-auto">
                <ul class="menu_social">
                    <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"81886c986b5a9fd1","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

</html>