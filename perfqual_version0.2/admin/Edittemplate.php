<?php
include 'partial/header.php';

if (isset($_GET['edit'])) {
    $sno = $_GET['edit'];
    $sql = "SELECT * FROM `template` WHERE `t_id` = $sno";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['btn_update'])) {
    $uploadDirectory = '../images/template/';

    $updatedTitle = $_POST['title'];

    // Handle icon upload if needed
    if ($_FILES['icon']['name']) {
        $iconTmpName = $_FILES['icon']['tmp_name'];
        $iconName = $_FILES['icon']['name'];
        move_uploaded_file($iconTmpName, $uploadDirectory . $iconName);
        $updatedIcon = $iconName;
    } else {
        $updatedIcon = $row['t_icon'];
    }

    // Handle files upload
    if ($_FILES['files1']['name']) {
        $fileNames = $_FILES['files1']['name'];
        $fileTmpNames = $_FILES['files1']['tmp_name'];
        move_uploaded_file($fileTmpNames, $uploadDirectory . $fileNames);
        $updatedFiles = $fileNames;
    } else {
        $updatedFiles = $row['t_files'];
    }

    $updateSql = "UPDATE `template` SET `t_name`='$updatedTitle', `t_icon`='$updatedIcon', `t_files`='$updatedFiles' WHERE `t_id`=$sno";
    $updateResult = mysqli_query($conn, $updateSql);

    echo "<script>alert('Updated successfully!')</script>";
    echo "<script>window.location.href = 'Template.php';</script>";
}
?>

<!-- Create an HTML form to edit the template details -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Template</h6>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" class="needs-validation">
                <input type="hidden" name="t_id" value="<?php echo $row['t_id']; ?>">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip01">Title</label>
                        <input type="text" name="title" class="form-control" required value="<?php echo $row['t_name']; ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip01">Icon</label>
                        <input type="file" name="icon" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip01">Files</label>
                        <input type="file" name="files1" class="form-control">
                    </div>
                </div>
                <center>
                    <button class="btn btn-primary" type="submit" style="width: 150px;" name="btn_update">Update</button>
                </center>
            </form>
        </div>
    </div>
</div>

<?php include 'partial/footer.php' ?>
