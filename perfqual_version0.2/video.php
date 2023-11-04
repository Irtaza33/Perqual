<?php include 'partial/nav.php' ?>

<!-- CONTENT START -->
<div class="page-content">




    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url(images/video.jpg)"></div>
            <div class="home_content">
                <h1>VIDEOS</h1>
            </div>
        </div>
        
    </div>

    <?php if (isset($_GET['library_details'])) {
        $id = $_GET['library_details'];

        $fetch = mysqli_query($conn, "SELECT * FROM `sap_library` JOIN library_title on library_title.t_id = sap_library.library_id where s_id = '" . $id . "'     ");
        $ftt = mysqli_fetch_array($fetch);
    ?>
        <main id="main">

            <div class="container" style="width: 90%;">
                <div class="row">
                    <div class="col-lg-9"><br><br>
                        <h1 style="color:black" > <?php echo $ftt['s_title'] ?></h1>
                        <p style="font-size: 12px;color:grey">by <?php echo $ftt['t_name'] ?></p>
                        <?php
                        $youtubeLink = $ftt['s_video']; // Replace VIDEO_ID with the actual YouTube video ID

                        $pattern = '/(?:youtube\.com\/(?:[^\/]+\/[^\/]+\/|(?:v|e(?:mbed)?)\/|[^?]+[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/';
                        preg_match($pattern, $youtubeLink, $matches);

                        if (!empty($matches[1])) {
                            $videoID = $matches[1];
                            echo '<iframe style="border-radius:10px !important;width:100%;height:500px" src="https://www.youtube.com/embed/' . $videoID . '"
                    frameborder="0" allowfullscreen></iframe>';
                        } else {
                            echo 'Invalid YouTube link.';
                        }
                        ?>
                        <br>
                        <br>
                        <p><?php echo $ftt['s_des'] ?></p>


                    </div>
                    <div class="col-lg-3"><br><br><br><br><br>
                        <p style="font-size: 20px;color:black">Related</p>

                        <div id="img1">
                            <?php
                            $sql2 = mysqli_query($conn, "SELECT * FROM `sap_library` where library_id = '" . $_GET['lib_id'] . "' AND s_id != '" . $_GET['library_details'] . "' ORDER by s_id DESC ");
                            while ($ftc2 = mysqli_fetch_array($sql2)) {

                                $youtubeLink = $ftc2['s_video']; // Replace VIDEO_ID with the actual YouTube video ID

                                $pattern = '/(?:youtube\.com\/(?:[^\/]+\/[^\/]+\/|(?:v|e(?:mbed)?)\/|[^?]+[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/';
                                preg_match($pattern, $youtubeLink, $matches);

                                if (!empty($matches[1])) {
                                    $videoID = $matches[1];
                                    echo '<a  href="?library_details=' . $ftc2['s_id'] . '&lib_id=' . $ftc2['library_id'] . '">
                        <img  style="object-fit: cover;width:100%;height:150px;border-radius:10px;" src="https://img.youtube.com/vi/' . $videoID . '/hqdefault.jpg" alt="Thumbnail"  >
                        <span style="color:black;font-size:12px" >' . $ftc2['s_title'] . '</span><br><br>
                        </a>';
                                } else {
                                    echo 'Invalid YouTube link.';
                                }
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>

        </main>

        <br>
        <br>
    <?php } else { ?>

        <main id="main">
            <br>
            <br>

            <div class="container" style="width: 100vw;">

                <div class="row">
                    <div class="col-lg-9">
                        <p style=" color: black;">Watch videos, listen to podcasts, and read essays for startup founders. Peruse the full library archive here.</p>
                    </div>
                    <div class="col-lg-3">
                        <input type="text" placeholder="Search..." class="form-control" name="">
                    </div>
                </div>
                <hr>
                <style>

                </style>
                <div class="row">
                    <div class="col-lg-6">
                        <?php
                        $sql2 = mysqli_query($conn, "SELECT * FROM `sap_library` ORDER by s_id DESC ");
                        $ftc2 = mysqli_fetch_array($sql2);

                        $youtubeLink = $ftc2['s_video']; // Replace VIDEO_ID with the actual YouTube video ID

                        $pattern = '/(?:youtube\.com\/(?:[^\/]+\/[^\/]+\/|(?:v|e(?:mbed)?)\/|[^?]+[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/';
                        preg_match($pattern, $youtubeLink, $matches);

                        if (!empty($matches[1])) {
                            $videoID = $matches[1];
                            echo '<a href="?library_details=' . $ftc2['s_id'] . '&lib_id=' . $ftc2['library_id'] . '">
            <img  style="object-fit: cover;width:100%;height:300px;border-radius:10px;border-color:linear-gradient(to right, #0e68a5, #5b75bd);border-width:5px;border-style:solid" src="https://img.youtube.com/vi/' . $videoID . '/hqdefault.jpg" alt="Thumbnail"  >
            
            </a>';
                        } else {
                            echo 'Invalid YouTube link.';
                        }
                        ?>
                    </div>
                    <div class="col-lg-4" style="padding: 20px;">
                        <br>
                        <br>
                        <a href="?library_details=<?php echo $ftc2['s_id']; ?>&lib_id=<?php echo $ftc2['library_id'] ?>">
                            <h3 style="color:black"><?php echo $ftc2['s_title']; ?></h3>
                            <p style="color:black"> <?php echo $ftc2['s_des']; ?></p>
                        </a>
                    </div>
                </div>
                <hr>
                <?php $sql = mysqli_query($conn, "SELECT * FROM `library_title`");
                while ($ftc = mysqli_fetch_array($sql)) {
                ?>
                    <div class="row">
                        <h3 style="color:black" >&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ftc['t_name'] ?></h3>
                        <div class="owl-carousel" id="carousel<?php echo $ftc['t_id'] ?>">
                            <?php $sql1 = mysqli_query($conn, "SELECT * FROM `sap_library` where library_id = '" . $ftc['t_id'] . "' ");
                            while ($ftc1 = mysqli_fetch_array($sql1)) {

                            ?>
                                <div class="col-lg-12">

                                    <div class="icon-box">
                                        <div class="icon">
                                            <?php
                                            $youtubeLink = $ftc1['s_video']; // Replace VIDEO_ID with the actual YouTube video ID

                                            $pattern = '/(?:youtube\.com\/(?:[^\/]+\/[^\/]+\/|(?:v|e(?:mbed)?)\/|[^?]+[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/';
                                            preg_match($pattern, $youtubeLink, $matches);

                                            if (!empty($matches[1])) {
                                                $videoID = $matches[1];
                                                echo '<a href="?library_details=' . $ftc1['s_id'] . '&lib_id=' . $ftc1['library_id'] . '">
                            <img style="object-fit: cover;width:100%;height:200px;border-radius:10px;border-color:linear-gradient(to right, #0e68a5, #5b75bd);border-width:5px;border-style:solid;margin-bottom: 10px;" src="https://img.youtube.com/vi/' . $videoID . '/hqdefault.jpg" alt="Thumbnail"  >
                            <span style="color:black;font-size:19px;font-weight:200;" >' . $ftc1['s_title'] . '</span>
                            </a>';
                                            } else {
                                                echo 'Invalid YouTube link.';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            <?php
                            } ?>

                        </div>
                    </div>

                    <hr>




                    <!-- Add jQuery and Owl Carousel from CDN -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

                    <script>
                        $(document).ready(function() {
                            $("#carousel" + <?php echo $ftc['t_id'] ?>).owlCarousel({
                                loop: false,
                                margin: 10,
                                nav: true,
                                navText: ["<i class='fas fa-chevron-left'></i>", "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fas fa-chevron-right'></i>"],

                                dots: false,
                                autoplay: false, // Enable autoplay
                                autoplayTimeout: 3000, // Set autoplay timeout to 3 seconds (adjust as needed)
                                responsive: {
                                    0: {
                                        items: 2
                                    },
                                    600: {
                                        items: 3
                                    },
                                    1000: {
                                        items: 3
                                    }
                                }
                            });
                        });
                    </script>

                <?php } ?>

            </div>

            <br>
            <br>
            <br>
            <br>
            <br>

        </main><!-- End #main -->
    <?php } ?>
    <!-- ======= Footer ======= -->


</div>
<!-- CONTENT END -->
<?php include 'partial/footer.php' ?>