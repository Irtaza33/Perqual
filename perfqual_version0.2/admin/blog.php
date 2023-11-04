<?php include 'partial/header.php';

if (isset($_POST['btn_submit'])) {
    // Define a directory to store uploaded files
    $uploadDirectory = '../images/blog/';

    // Handle the title input
    $title = $_POST['title'];
    $author = $_POST['author'];
    $text = $_POST['text'];
    $date = $_POST['date'];

     // Handle the files upload

    $fileNames = $_FILES['files1']['name'];
    $fileTmpNames = $_FILES['files1']['tmp_name'];

    move_uploaded_file($fileTmpNames, $uploadDirectory . $fileNames);




    $sql = mysqli_query($conn, "INSERT INTO `blog`(`b_title`, `b_author`, `b_text`, `b_date`, `b_files`) VALUES ('$title','$author','$text','$date','$fileNames')");



    echo "<script>alert('Submitted successfully!')</script>";
    echo "<script>window.location.href = 'blog.php';</script>";
}


// php delect function start
if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    $sql = "DELETE FROM `blog` WHERE `b_id` = $sno";
    $result = mysqli_query($conn, $sql);
}
// php delect function end
?>

<?php 

if (isset($_GET['edit'])) {
    $sno = $_GET['edit'];
    $sql = "SELECT  FROM `blog` WHERE `b_id` = $id";
    $result = mysqli_query($conn, $sql);

    
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Blogs</h6>
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
                        <label for="validationTooltip01">Author</label>
                        <input type="text" name="author" class="form-control" required>
                        <div class="valid-tooltip">

                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip01">Date</label>
                        <input type="date" name="date" class="form-control" required>
                        <div class="valid-tooltip">

                        </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip01">Image</label>
                        <input type="file" name="files1" class="form-control" required>
                        <div class="valid-tooltip">

                        </div>
                    </div>

                </div>
                </div>
                
                <div class="col-md-6 mb-3 ">
                        <label for="validationTooltip01">Text</label>
                        <input style="width: 1100px; height: 150px" type="text" name="text" class="form-control" required>
                        <div class="valid-tooltip">

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
                            <th>Blog Id</th>
                            <th>Title</th>
                            <th>Text</th>
                            <th>Date</th>
                            <th>Author</th>
                            <th>Files</th>
                            <th>Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = mysqli_query($conn, "Select * from blog");
                        while ($fetch = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td><?php echo $fetch['b_id'] ?></td>
                                <td><?php echo $fetch['b_title'] ?></td>
                                <td><?php echo $fetch['b_text'] ?></td>
                                <td><?php echo $fetch['b_date'] ?></td>
                                <td><?php echo $fetch['b_author'] ?></td>
                                <td><?php echo $fetch['b_files'] ?></td>
                                <td>
                                    <a href='EditBLog.php?edit=<?php echo $fetch['b_id']; ?>' class='btn btn-success btn-sm'>Edit</a>
                                    
                                    <a href='?delete=<?php echo $fetch['b_id']; ?>' class='btn btn-danger btn-sm'>Delete</a>

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