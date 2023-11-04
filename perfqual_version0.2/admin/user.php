<?php include 'partial/header.php' ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

            
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Organization</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Phone Number</th>
                                            <th>registeration Date</th>
                                            <th>Status</th>
                                            <th>Verify</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $sql = mysqli_query($conn,"Select * from user");
                                        while($fetch = mysqli_fetch_array($sql)){
                                        ?>
                                        <tr>
                                            <td><?php echo $fetch['full_name'] ?></td>
                                            <td><?php echo $fetch['organization_name'] ?></td>
                                            <td><?php echo $fetch['email'] ?></td>
                                            <td><?php echo $fetch['password'] ?></td>
                                            <td><?php echo $fetch['phone_no'] ?></td>
                                            <td><?php echo $fetch['date'] ?></td>
                                            <td><?php echo $fetch['status'] ?></td>
                                            <td><?php echo $fetch['status'] ?></td>

                                        </tr>
                                        <?php }?>
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
