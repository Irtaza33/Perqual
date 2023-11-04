<?php
include 'partial/header.php';

if (isset($_GET['edit'])) {
    $sno = $_GET['edit'];
    $sql = "SELECT * FROM `blog` WHERE `b_id` = $sno";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['btn_update'])) {
    $uploadDirectory = '../images/blog/';

    // Handle the updated data
    $updatedTitle = $_POST['title'];
    $updatedAuthor = $_POST['author'];
    $updatedText = $_POST['text'];
    $updatedDate = $_POST['date'];

    // Handle file upload if needed
    if ($_FILES['files1']['name']) {
        $fileNames = $_FILES['files1']['name'];
        $fileTmpNames = $_FILES['files1']['tmp_name'];
        move_uploaded_file($fileTmpNames, $uploadDirectory . $fileNames);
        $updatedFiles = $fileNames;
    } else {
        $updatedFiles = $row['b_files'];
    }

    // Update the blog post in the database
    $updateSql = "UPDATE `blog` SET `b_title`='$updatedTitle', `b_author`='$updatedAuthor', `b_text`='$updatedText', `b_date`='$updatedDate', `b_files`='$updatedFiles' WHERE `b_id`=$sno";
    $updateResult = mysqli_query($conn, $updateSql);

    echo "<script>alert('Updated successfully!')</script>";
    echo "<script>window.location.href = 'blog.php';</script>";
}
?>

<!-- Create an HTML form to edit the blog post data -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Blog</h6>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" class="needs-validation">
                <input type="hidden" name="b_id" value="<?php echo $row['b_id']; ?>">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip01">Title</label>
                        <input type="text" name="title" class="form-control" required value="<?php echo $row['b_title']; ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip01">Author</label>
                        <input type="text" name="author" class="form-control" required value="<?php echo $row['b_author']; ?>">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">Date</label>
                    <input style="width: 1110px" type="date" name="date" class="form-control" required value="<?php echo $row['b_date']; ?>">
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip01">Image</label>
                        <input type="file" name="files1" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">Text</label>
                    <textarea style="width: 1110px; height: 150px" name="text" class="form-control" required><?php echo $row['b_text']; ?></textarea>
                </div>
                <center>
                    <button class="btn btn-primary" type="submit" style="width: 150px;" name="btn_update">Update</button>
                </center>
            </form>
        </div>
    </div>
</div>

<?php include 'partial/footer.php' ?>
