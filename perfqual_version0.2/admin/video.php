<?php
include 'partial/header.php';
include '../partial/config.php';


?>


<div class="page-container ">
	<!--/content-inner-->
	<div class="left-content">


		<!--working-->

		<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2022.3.913/styles/kendo.default-v2.min.css" />

		<script src="https://kendo.cdn.telerik.com/2022.3.913/js/kendo.all.min.js"></script>
		<div class="card-body">

		<div class="w3-agile-chat">
			<div class="charts">
				<div class="col-md-12 w3layouts-char">

					<div class="charts-grids widget">

						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<form method="post">
									<div class="row">
										<div class="col-md-6">
											<input type="text" name="name" placeholder="Library Title" class="form-control" required>
										</div>
										<div class="col-md-6">

											<select name="module" class="form-control" required>
												<option value="" disabled selected>--Select Library section--</option>
												<?php
												$query = "SELECT * FROM `library_title` ";
												$rec = mysqli_query($conn, $query);
												while ($row = mysqli_fetch_array($rec)) {
													echo '<option value="' . $row['t_id'] . '">' . $row['t_name'] . ' </option>';
												}
												?>
											</select>

											<!-- <button type="button" class="btn btn-light btn-block" data-toggle="modal" data-target="#senderModal">+ Add section</button> -->
										</div>
									</div>
									<br>

									<div class="row">
										<div class="col-md-12">
											<label>Description</label>
											<textarea class="form-control" id="myEditor" rows="4" name="c_des"></textarea>
										</div>


									</div>
									<br>

									<div class="row">
										<div class="col-md-12">
											<input type="text" class="form-control" name="ifram_v" placeholder="Youtube Video link">
										</div>

									</div>
									<br>
									<script>
										var shouldInsertList = true;
										$("#myEditor").kendoEditor({
											// Implement an event handler for the select event
											select: function(e) {
												// Set initially the Editor to start an unordered list
												if (shouldInsertList) {
													shouldInsertList = false;
												}
											}
										});
									</script>
									<br>
									<button name="btn_submit" class="btn btn-primary">Save</button>
								</form>
							</div>
							<div class="col-md-2"></div>
						</div>
						<br>
						<br>
			


						<div class="row">
							<div class="col-md-12">
								<table class="table table-stripped" id="dataTable" width="100%" cellspacing="0">
									<tr>
										<th>Id</th>
										<th>Title</th>
										<th>Description</th>
										<th>Section</th>
										<th>video</th>
										<th>Delete</th>
									</tr>
									<?php
									$query = "SELECT * FROM `sap_library` JOIN library_title on library_title.t_id = sap_library.library_id order by s_id ASC;";
									$rec = mysqli_query($conn, $query);
									while ($row = mysqli_fetch_array($rec)) {
									?>
										<tr>
											<td><?php echo $row['s_id']; ?></td>
											<td><?php echo $row['s_title']; ?></td>
											<td><?php echo htmlspecialchars(substr($row['s_des'], 0, 100)); ?></td>

											<td><?php echo $row['t_name']; ?></td>
											<td><?php echo $row['s_video']; ?></td>
											<td>
												
													<a onclick="return checkdelete()" href="?delete=<?php echo $row['s_id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
											</td>
										</tr>
									<?php
									}

									?>
								</table>


							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		</div>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script> <!-- Optional for Bootstrap styling -->

<script>
    $(document).ready(function () {
        $('#table_id').DataTable();
    });
</script>

		
		<?php
		if (isset($_POST['btn_submit'])) {
			$s_name = $_POST['name'];
			$module = $_POST['module'];
			$c_des = mysqli_real_escape_string($conn, $_POST['c_des']);
			$ifram_v = $_POST['ifram_v'];

			$insert = mysqli_query($conn, "insert into sap_library(`s_title`,`s_des`,`s_video`,`library_id`) VALUES('" . $s_name . "','" . $c_des . "','" . $ifram_v . "','" . $module . "') ");
			echo "<script>window.location.href = 'video.php';</script>";
		}

		if (isset($_POST['btn_sim'])) {
			$s_name = $_POST['s_name'];
			$insert = mysqli_query($conn, "insert into modal(m_description) VALUES('$s_name') ");
			echo "<script>window.location.href = 'curriculum';</script>";
		}

		if (isset($_GET['delete'])) {
			$delete = mysqli_query($conn, "DELETE FROM `sap_library` WHERE s_id = '" . $_GET['delete'] . "' ");
			echo "<script>window.location.href='video.php';</script>";
		}
		?>

		<!-- Modal -->
		<div class="modal fade" id="senderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Module </h5>
					</div>
					<form action="" method="post">
						<div class="modal-body">
							<input type="text" name="s_name" placeholder="Module" class="form-control" required><br>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" name="btn_sim" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="senderModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add SAP Venue</h5>
					</div>
					<form action="" method="post">
						<div class="modal-body">
							<input type="text" name="s_venue" placeholder="SAP Venue" class="form-control" required><br>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" name="btn_ven" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>


	</div>


	<script>
		$(document).ready(function() {

			// $('.page-container').addClass('sidebar-collapsed');


			// $("#txtname").change(function(){
			// var name=$(this).val();
			// $.ajax({
			// url:"team.php",
			// method:"POST",
			// data:'name='+name,
			// success:function(data)
			// {
			// $("#table_data").html(data);
			// }
			// });
			// });
		});

		function checkdelete() {

			return confirm("Are you sure");
		}
	</script>
<?php include 'partial/footer.php' ?>