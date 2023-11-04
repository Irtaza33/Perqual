<?php
include 'partial/header.php';
$msg = "";

if (isset($_POST['btn_submit'])) {

    $q_question = mysqli_real_escape_string($conn, $_POST['q_question']);

    $section_id = $_POST['section_id'];
    $sub_section_id = $_POST['sub_section_id'];
    $weightage = $_POST['weightage'];

    $cycle_phase = $_POST['cycle_phase'];
    $p_phase = $_POST['p_phase'];
    $auditee = $_POST['auditee'];
    if ($q_question == "") {
        echo "<script>alert('Question is required')</script>";
    } else {
        $insert = "INSERT INTO `quiz_question`(`section_id`,`sub_section_id`,`cycle_phase`,`p_phase`,`auditee`,`weightage`, `q_question`,`status`) 
    VALUES ('$section_id','$sub_section_id','$cycle_phase','$p_phase','$auditee','$weightage','$q_question','1')";
        $result1 = mysqli_query($conn, $insert);
        echo "<script>window.location.href='quiz.php?show_qpml';</script>";
    }
}


if (isset($_POST['btn_update'])) {

    $q_question = mysqli_real_escape_string($conn, $_POST['q_question']);

    $section_id = $_POST['section_id'];
    $sub_section_id = $_POST['sub_section_id'];
    $weightage = $_POST['weightage'];

    $cycle_phase = $_POST['cycle_phase'];
    $p_phase = $_POST['p_phase'];
    $auditee = $_POST['auditee'];
    if ($q_question == "") {
        echo "<script>alert('Question is required')</script>";
    } else {
        $insert = "UPDATE `quiz_question`
        SET
            `section_id` = '$section_id',
            `sub_section_id` = '$sub_section_id',
            `cycle_phase` = '$cycle_phase',
            `p_phase` = '$p_phase',
            `auditee` = '$auditee',
            `weightage` = '$weightage',
            `q_question` = '$q_question',
            `status` = '1'
        WHERE
            `q_id` = '" . $_GET['edit_quiz'] . "' ";
        $result1 = mysqli_query($conn, $insert);
        echo "<script>window.location.href='quiz.php?show_qpml';</script>";
    }
}

$error = "";



// php delect function start
if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM `quiz_question` WHERE `q_id` = $sno";
    $result = mysqli_query($conn, $sql);
    echo "<script>window.location.href='quiz.php?show_qpml';</script>";
}
if (isset($_GET['delete_crt'])) {
    $sno = $_GET['delete_crt'];
    $delete = true;
    $sql = "DELETE FROM `sub_section` WHERE `s_id` = $sno";
    $result = mysqli_query($conn, $sql);
    echo "<script>window.location.href='quiz.php?sub_Criterion';</script>";
}

if (isset($_GET['delete_crt1'])) {
    $sno = $_GET['delete_crt1'];
    $delete = true;
    $sql = "DELETE FROM `section` WHERE `section_id` = $sno";
    $result = mysqli_query($conn, $sql);
    echo "<script>window.location.href='quiz.php?Criterion';</script>";
}
// php delect function end



?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quiz</h6>
        </div>
        <?php if (isset($_GET['sub_Criterion'])) { ?>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-5">
                        <form method="POST" enctype="multipart/form-data" class="needs-validation">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationTooltip01">Sub Criterion Title</label>
                                    <input type="text" name="crt" class="form-control" required>
                                    <div class="valid-tooltip">

                                    </div>
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="col-md-12 mb-3">
                                    <label for="validationTooltip01">Details</label>
                                    <textarea name="crt_det" id="" class="form-control" cols="30" rows="10"></textarea>
                                    <div class="valid-tooltip">

                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit" style="width: 150px;" name="btn_crt">Submit </button>
                        </form>
                        <?php if (isset($_POST['btn_crt'])) {
                            $title = $_POST['crt'];
                            $detail = $_POST['crt_det'];
                            $insert_crt = mysqli_query($conn, "INSERT INTO `sub_section`(`heading`, `details`) VALUES ('$title','$detail')");
                            echo "<script>window.location.href='quiz.php?sub_Criterion';</script>";
                        } ?>
                    </div>
                    <div class="col-lg-7">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                    <th > ID</th>

                                        <th>Sub Criterion Title</th>
                                        <th>Sub Criterion Details</th>
                                        <th>Actions </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($conn, "Select * from sub_section order by s_id DESC ");
                                    while ($fetch = mysqli_fetch_array($sql)) {
                                    ?>
                                        <tr>
                                            
                                            <td><?php echo $fetch['s_id'] ?></td>
                                            <td><?php echo $fetch['heading'] ?></td>
                                            <td><?php echo $fetch['details'] ?></td>
                                            <td>
                                                <a href='?sub_Criterion&delete_crt=<?php echo $fetch['s_id']; ?>' class='btn btn-danger btn-sm'><i class="fa fa-trash"></i></a>

                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        <?php } else if (isset($_GET['Criterion'])) { ?>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-5">
                        <form method="POST" enctype="multipart/form-data" class="needs-validation">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationTooltip01">Criterion Title</label>
                                    <input type="text" name="crt1" class="form-control" required>
                                    <div class="valid-tooltip">

                                    </div>
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="col-md-12 mb-3">
                                    <label for="validationTooltip01">Details</label>
                                    <textarea name="crt_det1" id="" class="form-control" cols="30" rows="10"></textarea>
                                    <div class="valid-tooltip">

                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit" style="width: 150px;" name="btn_crt">Submit </button>
                        </form>
                        <?php if (isset($_POST['btn_crt'])) {
                            $title1 = $_POST['crt1'];
                            $detail1 = $_POST['crt_det1'];
                            $insert_crt = mysqli_query($conn, "INSERT INTO `section`(`section_heading`, `details`) VALUES ('$title1','$detail1')");
                            echo "<script>window.location.href='quiz.php?Criterion';</script>";
                        } ?>
                    </div>
                    <div class="col-lg-7">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th > ID</th>
                                        <th> Criterion Title</th>
                                        <th> Criterion Details</th>
                                        <th>Actions </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($conn, "Select * from section ORDER by section_id DESC ");
                                    while ($fetch = mysqli_fetch_array($sql)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $fetch['section_id'] ?></td>
                                            <td><?php echo $fetch['section_heading'] ?></td>
                                            <td><?php echo $fetch['details'] ?></td>
                                            <td>
                                                <a href='?Criterion&delete_crt1=<?php echo $fetch['section_id']; ?>' class='btn btn-danger btn-sm'><i class="fa fa-trash"></i></a>

                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        <?php } else if (isset($_GET['show_qpml'])) { ?>

            <!-- Quiz Table -->
            <div class="table-responsive" style="padding: 10px;" >

                <table class="table table-bordered mt-4" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Question</th>
                            <th>Deming Cycle's Phase</th>
                            <th>Juran's Quality Trilogy</th>

                            <th>Criterion </th>
                            <th>Sub Criterion </th>
                            <th>Weightage</th>
                            <th>Auditee</th>
                            <th>Options</th>
                            <th>Scores</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `quiz_question`
                                            JOIN section on section.section_id =   quiz_question.section_id
                                            JOIN sub_section on sub_section.s_id =   quiz_question.sub_section_id

                                            JOIN cycle_phase on cycle_phase.phase_id =   quiz_question.cycle_phase
                                            JOIN deming_cycle on deming_cycle.d_id =   quiz_question.p_phase
                                            
                                             ";
                        $result = mysqli_query($conn, $sql);
                        $sno = 1;
                        while ($row = mysqli_fetch_array($result)) {

                        ?>
                            <tr>
                                <td><?php echo  $row['q_question']; ?></td>
                                <td><?php echo  $row['phase_title']; ?></td>
                                <td><?php echo  $row['deming_cycle']; ?>
                                <td><?php echo  $row['section_heading']; ?>
                                <td><?php echo  $row['heading']; ?>
                                <td><?php echo  $row['weightage']; ?>
                                <td><?php echo  $row['auditee']; ?>
                                <td>
                                    <?php
                                    $sql2 = mysqli_query($conn, "SELECT * FROM `quiz_answer`");
                                    $answers = array();

                                    while ($row2 = mysqli_fetch_array($sql2)) {
                                        $answers[] = $row2['a_answer'] . '%';
                                    }

                                    echo implode(', ', $answers);
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $sql2 = mysqli_query($conn, "SELECT * FROM `quiz_answer`");
                                    $answers = array();

                                    while ($row2 = mysqli_fetch_array($sql2)) {
                                        $answers[] = $row2['score'] . '%';
                                    }

                                    echo implode(', ', $answers);
                                    ?>
                                </td>

                                <td>
                                    <div>
                                        <a href='?edit_quiz=<?php echo $row['q_id'] ?>' class='btn btn-success btn-sm' style="width: 40%;padding: 1px;"><i style="font-size: 10px;" class="fa fa-pencil"></i></a>
                                        <a href='?delete=<?php echo $row['q_id'] ?>' class='btn btn-danger btn-sm' style="width: 40%;padding: 1px;"><i style="font-size: 10px;" class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                            $sno++;
                        }
                        ?>
                        <!-- <button class='delete btn btn-sm btn-primary' id=d".$row['id'].">Delete</button>  </td> -->
                    </tbody>
                </table>
            </div>

        <?php } else { ?>
            <div class="card-body">
                <?php if (isset($_GET['edit_quiz'])) {
                    $sql3 = mysqli_query($conn, "SELECT * FROM `quiz_question` 
                     JOIN section on section.section_id =   quiz_question.section_id
                    JOIN sub_section on sub_section.s_id =   quiz_question.sub_section_id

                    JOIN cycle_phase on cycle_phase.phase_id =   quiz_question.cycle_phase
                    JOIN deming_cycle on deming_cycle.d_id =   quiz_question.p_phase
                 where q_id ='" . $_GET['edit_quiz'] . "' ");
                    $ft = mysqli_fetch_array($sql3);
                ?>
                    <form method="POST" class="needs-validation">
                        <div class="form-row">
                            <div class="col-md-7 mb-3">
                                <label for="validationTooltip01">Question <span style="color:red">*</span></label>
                                <textarea id="editor1" required style="height: 100%;" class="form-control  editor" name="q_question" rows="5"><?php echo $ft['q_question'] ?></textarea>
                            </div>
                            <div class="col-md-5 mb-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="validationTooltip01">Deming Cycle's Phase </label>
                                            <select name="cycle_phase" class="editor form-control">

                                                <?php $select = mysqli_query($conn, "select * from cycle_phase");
                                                while ($fetch = mysqli_fetch_array($select)) { ?>
                                                    <option value="<?php echo $fetch['phase_id'] ?>" <?php if ($fetch['phase_title'] == $ft['phase_title']) echo 'selected'; ?>><?php echo $fetch['phase_title'] ?></option>
                                                <?php }  ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="validationTooltip01">Juran's Quality Trilogy</label>
                                            <select name="p_phase" class="form-control" required>
                                                <?php $select = mysqli_query($conn, "select * from deming_cycle");
                                                while ($fetch = mysqli_fetch_array($select)) { ?>
                                                    <option value="<?php echo $fetch['d_id'] ?>" <?php if ($fetch['deming_cycle'] == $ft['deming_cycle']) echo 'selected'; ?>><?php echo $fetch['deming_cycle'] ?></option>
                                                <?php }  ?>
                                            </select>
                                        </div>
                                        <br><br><br><br>

                                        <div class="col-lg-6">
                                            <label for="validationTooltip01">Criterion <span style="color:red">*</span></label>
                                            <select name="section_id" required class="form-control">
                                                <option value="" selected disabled>Select Criterion</option>
                                                <?php $select = mysqli_query($conn, "select * from section");
                                                while ($fetch = mysqli_fetch_array($select)) { ?>
                                                    <option value="<?php echo $fetch['section_id'] ?>" <?php if ($fetch['section_heading'] == $ft['section_heading']) echo 'selected'; ?>><?php echo $fetch['section_heading'] ?></option>
                                                <?php }  ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="validationTooltip01">Sub Criterion <span style="color:red">*</span></label>
                                            <select name="sub_section_id" required class="form-control">
                                                <option value="" selected disabled>Select Sub Criterion</option>
                                                <?php $select = mysqli_query($conn, "select * from sub_section");
                                                while ($fetch = mysqli_fetch_array($select)) { ?>
                                                    <option value="<?php echo $fetch['s_id'] ?>" <?php if ($fetch['heading'] == $ft['heading']) echo 'selected'; ?>><?php echo $fetch['heading'] ?></option>
                                                <?php }  ?>
                                            </select>
                                        </div>
                                        <br><br><br><br>
                                        <div class="col-lg-6">
                                            <label for="validationTooltip01">Weightage (0 - 14)<span style="color:red">*</span></label>
                                            <input type="number" min="0" value="<?php echo $ft['weightage'] ?>" id="weightageInput" max="14" name="weightage" required placeholder="Enter Weightage" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="validationTooltip01">Auditee (Level / Function)</label>
                                            <input type="text" value="<?php echo $ft['auditee'] ?>" id="AuditeeInput" required name="auditee" placeholder="Enter Weightage" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <script>
                            // Attach an event listener to the input field
                            document.getElementById("weightageInput").addEventListener("input", function() {
                                // Get the current value of the input
                                var value = parseFloat(this.value);

                                // Check if the value is less than 0
                                if (value < 0) {
                                    // If it's negative, set the value to 0
                                    this.value = 0;
                                } else if (value > 14) {
                                    this.value = 14;

                                }
                            });
                            document.getElementById("AuditeeInput").addEventListener("input", function() {
                                // Get the current value of the input
                                var value = parseFloat(this.value);

                                // Check if the value is less than 0
                                if (value < 0) {
                                    // If it's negative, set the value to 0
                                    this.value = 0;
                                }
                            });
                        </script>
                        <br>
                        <button class="btn btn-primary" type="submit" style="width: 150px;" name="btn_update">Update form</button>
                    </form>
                <?php } else { ?>
                    <form method="POST" id="myForm" class="needs-validation">
                        <div class="form-row">
                            <div class="col-md-7 mb-3">
                                <label for="validationTooltip01">Question <span style="color:red">*</span></label>
                                <textarea id="editor1" required style="height: 100%;" class="form-control  editor" name="q_question" rows="5"></textarea>
                            </div>
                            <div class="col-md-5 mb-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="validationTooltip01">Deming Cycle Phase </label>
                                            <select name="cycle_phase" class="editor form-control">
                                                <?php $select = mysqli_query($conn, "select * from cycle_phase");
                                                while ($fetch = mysqli_fetch_array($select)) { ?>
                                                    <option value="<?php echo $fetch['phase_id'] ?>"><?php echo $fetch['phase_title'] ?></option>
                                                <?php }  ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="validationTooltip01">Juran's Quality Trilogy</label>
                                            <select name="p_phase" class="form-control" required>
                                                <?php $select = mysqli_query($conn, "select * from deming_cycle");
                                                while ($fetch = mysqli_fetch_array($select)) { ?>
                                                    <option value="<?php echo $fetch['d_id'] ?>"><?php echo $fetch['deming_cycle'] ?></option>
                                                <?php }  ?>
                                            </select>
                                        </div>
                                        <br><br><br><br>

                                        <div class="col-lg-6">
                                            <label for="validationTooltip01">Criterion <span style="color:red">*</span></label>
                                            <div class="input-group"> <!-- Wrapping in an input-group for button alignment -->
                                                <select name="section_id" required class="form-control">
                                                    <option value="" selected disabled>Select Criterion</option>
                                                    <?php $select = mysqli_query($conn, "select * from section");
                                                    while ($fetch = mysqli_fetch_array($select)) { ?>
                                                        <option value="<?php echo $fetch['section_id'] ?>"><?php echo $fetch['section_heading'] ?></option>
                                                    <?php }  ?>
                                                </select>
                                                <div class="input-group-append"> <!-- Adding the button in an input-group-append div -->
                                                    <a href="?Criterion" type="button" class="btn btn-primary">+</a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <label for="validationTooltip01">Sub Criterion <span style="color:red">*</span></label>
                                            <div class="input-group"> <!-- Wrapping in an input-group for button alignment -->
                                                <select name="sub_section_id" required class="form-control">
                                                    <option value="" selected disabled>Select Sub Criterion</option>
                                                    <?php $select = mysqli_query($conn, "select * from sub_section");
                                                    while ($fetch = mysqli_fetch_array($select)) { ?>
                                                        <option value="<?php echo $fetch['s_id'] ?>"><?php echo $fetch['heading'] ?></option>
                                                    <?php }  ?>
                                                </select>
                                                <div class="input-group-append"> <!-- Adding the button in an input-group-append div -->
                                                    <a href="?sub_Criterion" type="button" class="btn btn-primary">+</a>
                                                </div>
                                            </div>
                                        </div>


                                        <br><br><br><br>
                                        <div class="col-lg-6">
                                            <label for="validationTooltip01">Weightage (0 - 14)<span style="color:red">*</span></label>
                                            <input type="number" min="0" id="weightageInput" max="14" name="weightage" required placeholder="Enter Weightage" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="validationTooltip01">Auditee (Level / Function)</label>
                                            <input type="text" id="AuditeeInput" required name="auditee" placeholder="Enter Weightage" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <script>
                            // Attach an event listener to the input field
                            document.getElementById("weightageInput").addEventListener("input", function() {
                                // Get the current value of the input
                                var value = parseFloat(this.value);

                                // Check if the value is less than 0
                                if (value < 0) {
                                    // If it's negative, set the value to 0
                                    this.value = 0;
                                } else if (value > 14) {
                                    this.value = 14;

                                }
                            });
                            document.getElementById("AuditeeInput").addEventListener("input", function() {
                                // Get the current value of the input
                                var value = parseFloat(this.value);

                                // Check if the value is less than 0
                                if (value < 0) {
                                    // If it's negative, set the value to 0
                                    this.value = 0;
                                }
                            });
                        </script>
                        <br>
                        <button class="btn btn-primary" type="submit" style="width: 150px;" name="btn_submit">Submit form</button>
                    </form>

                    <form id="entry_form" method="post" enctype="multipart/form-data">

                        <br>
                        <br>
                        <div class="input-group-sm">
                            <label><span > Excel file </span> </label> <br> <label><input type="file" required class="form-control" style="height: auto;" name="excelfile"></label>
                        </div><br>
                        <div class="input-group-sm">
                            <!-- <span style="color:orange;">Upload Data With Excel</span> -->
                            <input type="submit" value="Upload Excel" name="btns" class="btn btn-primary">
                            <p style="margin-top:-13px;color:red;"><?php echo $msg; ?></p>
                        </div>

                        <br><br>




                    </form>
                <?php } ?>




            </div>
        <?php } ?>
    </div>

</div>
<!-- /.container-fluid -->

</div>

<?php

ini_set('max_execution_time', 300);
if (isset($_POST['btns'])) {

    if ($_FILES['excelfile']['name']) {
        $filename = explode(".", $_FILES['excelfile']['name']);
        if (end($filename) == "csv") {
            $handle = fopen($_FILES['excelfile']['tmp_name'], "r");
            $count=0;
            while ($data = fgetcsv($handle)) {

                 $data1 = mysqli_real_escape_string($conn, $data[2]); //Criterion  
                 $data2 = mysqli_real_escape_string($conn, $data[3]); //Sub Criterion 
                 $data3 = mysqli_real_escape_string($conn, $data[1]); //Deming Cycle Phase
                 $data4 = mysqli_real_escape_string($conn, $data[0]); //juran's Quality Trilogy
                 $data5 = mysqli_real_escape_string($conn, $data[4]); //Auditee (Level / Function)
                 $data6 = mysqli_real_escape_string($conn, $data[5]); //Weightage (0 - 14)
                 $data7 = mysqli_real_escape_string($conn, $data[6 ]); //Question 

                $upload = mysqli_query($conn, "INSERT INTO `quiz_question`(`section_id`, `sub_section_id`, `cycle_phase`, `p_phase`, `auditee`, `weightage`, `q_question`) 
                VALUES('$data1','$data2','$data3','$data4','$data5','$data6','$data7')");
                $count++;
                echo "<script>alert('$count rows inswerted successfully!')</script>";

            }

            fclose($handle);
        } else {
            $msg = "File must be in .csv format";
            echo $msg;
        }
    } else {
        $msg = "Please select file";
        echo $msg;
    }
}
?>



<script>
    CKEDITOR.replace('editor1');
</script>
<!-- End of Main Content -->
<?php include 'partial/footer.php' ?>