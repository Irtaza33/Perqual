<?php include 'partial/header.php';

if (isset($_POST['btn_submit'])) {
    // Define a directory to store uploaded files
    $uploadDirectory = '../images/template/';

    // Handle the title input
    $title = $_POST['title'];

    // Handle the icon upload
        $iconTmpName = $_FILES['icon']['tmp_name'];
        $iconName = $_FILES['icon']['name'];
        move_uploaded_file($iconTmpName, $uploadDirectory . $iconName);
   

    // Handle the files upload

        $fileNames = $_FILES['files1']['name'];
        $fileTmpNames = $_FILES['files1']['tmp_name'];
        
        move_uploaded_file($fileTmpNames, $uploadDirectory . $fileNames);

        
    

    $sql = mysqli_query($conn,"INSERT INTO `template`(`t_name`, `t_icon`, `t_files`) VALUES ('$title','$iconName','$fileNames')");
  

    echo "<script>alert('Submitted successfully!')</script>";
    echo "<script>window.location.href = 'Template.php';</script>";

}


// php delect function start
if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    $sql = "DELETE FROM `template` WHERE `t_id` = $sno";
    $result = mysqli_query($conn, $sql);
}
// php delect function end

?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User details</h6>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" class="needs-validation">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip01">Title</label>
                        <input type="text" name="title" class="form-control" required>
                        <div class="valid-tooltip">

                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip01">Icon</label>
                        <input type="file" name="icon" class="form-control" required>
                        <div class="valid-tooltip">

                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip01">Files</label>
                        <input type="file" name="files1" class="form-control" required>
                        <div class="valid-tooltip">

                        </div>
                    </div>

                </div>
                <center>
                    <button class="btn btn-primary" type="submit" style="width: 150px;" name="btn_submit">Submit </button>
                </center>
            </form>
            <br>
            <br>
            <br>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Template Id</th>
                            <th>Title</th>
                            <th>Icon</th>
                            <th>Files</th>
                            <th>Actions </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = mysqli_query($conn, "Select * from template");
                        while ($fetch = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td><?php echo $fetch['t_id'] ?></td>
                                <td><?php echo $fetch['t_name'] ?></td>
                                <td><?php echo $fetch['t_icon'] ?></td>
                                <td><?php echo $fetch['t_files'] ?></td>
                                <td>

                                <a href='Edittemplate.php?edit=<?php echo $fetch['t_id']; ?>' class='btn btn-success btn-sm'>Edit</a>
                                <a href='?delete=<?php echo $fetch['t_id']; ?>' class='btn btn-danger btn-sm'>Delete</a>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'partial/footer.php' ?>