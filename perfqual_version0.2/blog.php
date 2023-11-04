<?php
include 'partial/nav.php';
include 'partial/config.php';

?>


<div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url(images/blog0.jpg)"></div>
        <div class="home_content">
                <h1>BLOGS</h1>
            </div>
    </div>
    
</div>

<br>



<div class="container">
    <div class="row">

        <!--Main Content-->
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
            <?php if(isset($_GET['blog_details'])){ 
                    $sql = mysqli_query($conn, "SELECT * FROM `blog` where b_id = '".$_GET['blog_details']."' ");
                    $row = mysqli_fetch_array($sql);
                    ?>
                <!-- details -->
                <div class="blog--list-view">
                <img class="card-img-top" style="width: 60%;height: 400px;" src="images/blog/<?php echo $row['b_files'] ?>"> 
                <br>
                <br>
                <li>Author: <i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02"><?php echo $row['b_author'] ?></time></li>
                <li>Published Date: <i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02"><?php echo $row['b_date'] ?></time></li>

                <p><?php echo $row['b_text'] ?></p>
                </div>

                <!-- details -->

            <?php }else{ ?>
            <div class="blog--list-view">
                <div class="row">
                    <?php

                    $sql = mysqli_query($conn, "SELECT * FROM `blog`");

                    while ($row = mysqli_fetch_array($sql)) {

                    ?>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 article">
                            <!-- Article Image -->
                            <a class="article_featured-image"> <img class="card-img-top" style="width: 100%;height: 300px;" src="images/blog/<?php echo $row['b_files'] ?>"> </a>
                            <br><br>
                            <h3><a style="color:#003399"><?php echo $row['b_title'] ?></a></h3>
                            <ul class="publish-detail">

                                <li>Author: <i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02"><?php echo $row['b_author'] ?></time></li>
                                <li>Published Date: <i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02"><?php echo $row['b_date'] ?></time></li>
                            </ul>
                            <div class="rte">
                                <p></p>
                            </div>
                            <p><a style="background: linear-gradient(to right, #3498db, #3c6ae7);color:aliceblue" href="?blog_details=<?php echo $row['b_id'] ?>" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>

        </div>
        <!--End Main Content-->
    </div>
</div>

</div>
<!--End Body Content-->


<br>
<br>
<br>
<br>

</body>
<?php
include 'partial/footer.php';
?>

</html>