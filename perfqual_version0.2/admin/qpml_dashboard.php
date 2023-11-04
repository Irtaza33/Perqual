<?php include 'partial/header.php';
include '../partial/config.php';

?>


<?php 
$sql1=mysqli_query($conn,"SELECT count(*) FROM `quiz_question`  ");
$fetch1 = mysqli_fetch_array($sql1);

$sql2=mysqli_query($conn,"SELECT sum(weightage) FROM `quiz_question`  ");
$fetch2 = mysqli_fetch_array($sql2);

$sql3=mysqli_query($conn,"SELECT sum(weightage) FROM `quiz_question` where cycle_phase = '1'  ");
$fetch3 = mysqli_fetch_array($sql3);


$sql4=mysqli_query($conn,"SELECT sum(weightage) FROM `quiz_question` where cycle_phase = '2'  ");
$fetch4 = mysqli_fetch_array($sql4);


$sql5=mysqli_query($conn,"SELECT sum(weightage) FROM `quiz_question` where cycle_phase = '3'  ");
$fetch5 = mysqli_fetch_array($sql5);


$sql6=mysqli_query($conn,"SELECT sum(weightage) FROM `quiz_question` where cycle_phase = '4'  ");
$fetch6 = mysqli_fetch_array($sql6);

?>



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">QPML Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>


    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">
            <!-- Color System -->
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                            Total Questions
                            <div class="text-white-10 large"><?php echo $fetch1[0] ?></div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">
                            Total Weightage
                            <div class="text-white-10 large"><?php echo $fetch2[0] ?></div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card bg-info text-white shadow">
                        <div class="card-body">
                           Total Plan Weightage
                            <div class="text-white-10 large"><?php if($fetch3[0]==""){echo 0;}else{echo $fetch3[0];} ?></div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card bg-warning text-white shadow">
                        <div class="card-body">
                        Total Do Weightage
                            
                            <div class="text-white-10 large"><?php if($fetch4[0]==""){echo 0;}else{echo $fetch4[0];}?></div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card bg-danger text-white shadow">
                        <div class="card-body">
                        Total Study Weightage

                            <div class="text-white-10 large"><?php if($fetch5[0]==""){echo 0;}else{echo $fetch5[0];} ?></div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card bg-secondary text-white shadow">
                        <div class="card-body">
                        Total Act Weightage

                            <div class="text-black-10 large"><?php if($fetch6[0]==""){echo 0;}else{echo $fetch6[0];} ?></div>
                        </div>
                    </div>
                </div>
               
            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'partial/footer.php' ?>