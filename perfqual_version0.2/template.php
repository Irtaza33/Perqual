<?php
include 'partial/nav.php';
include 'partial/config.php';
error_reporting(E_ERROR | E_PARSE);

$keyword=mysqli_real_escape_string($conn,$_GET['keyword']);


$word=strtolower($keyword);
$WORD=strtoupper($keyword);
$Word=ucwords($keyword);



?>

<style>
    .icon-font-block {
        display: grid;
        width: 100%;
        text-align: center;
        vertical-align: top;
        background: #003399;
        padding: 10px;
        min-height: 170px;
        color: #fff;
        border-radius: 8px;
        width: 100%;
        height: auto;
        transition: transform 0.3s;
        /* Add a smooth transition effect */
    }

    .icon-font-block:hover {
        transform: scale(1.1);
        background: linear-gradient(to right, #3498db, #3c6ae7);
    }

    .icon-font-block .flat-icon {
        padding: 10px;
        display: block;
        font-size: 64px;
        line-height: 1;
        color: #fff;
    }
</style>


<div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url(images/Template.jpg)"></div>
        <div class="home_content">
                <h1>TEMPLATES</h1>
            </div>
    </div>
    
</div>

<div class="popular page_section">


    <div class="section-full">
        <div class="container">
            <div class="section-content">
                <div class="wt-box">
                    <div class="icon-font row d-flex justify-content-center flex-wrap">

                      <?php 
                      if($keyword != ""){
                      $sql= mysqli_query($conn,"SELECT * FROM `template` WHERE t_name LIKE '%$word%' AND t_name LIKE '%$WORD%' AND t_name LIKE '%$Word%' ");
                      }else{
                      $sql= mysqli_query($conn,"SELECT * FROM `template`");
                      }
                      $num = mysqli_num_rows($sql);
                      if($num == 0){
                        echo "<h2 style='color:red' >No template found</h2>";
                    }else{
                        while($row=mysqli_fetch_array($sql)){
                      
                            ?>
                      <div class="col-md-3 col-sm-6 m-b30" style="padding-bottom: 15px;">
                            <a href="images/template/<?php echo $row['t_files']; ?>" download>
                                <div class="icon-font-block">
                                    <span>
                                        <img src="images/template/<?php echo $row['t_icon']; ?>" alt="" width="100px" style="fill:white">
                                    </span>
                                    <div class="class-name"><?php echo $row['t_name']; ?></div>
                                </div>
                            </a>
                        </div>
                        <?php }
                     }?>


                       



                    </div>
                </div>
            </div>
        </div>
    </div>


    <br>
    <br>
    <br>
    <br>


    <?php
    include 'partial/footer.php';
    ?>