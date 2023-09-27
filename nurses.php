<!-- nurses.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Nurses</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <?php include('navbar.php'); ?>
</head>
<body>
	
    <?php include('styles.php'); ?>
    <?php include('db_connect.php'); ?>

	<div class="container mt-4">
		<h2>Nurses</h2>
		<form class="form-inline mb-2" method="get">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search by name" name="search">
				<div class="input-group-append">
					<button class="btn btn-custom" type="submit">Search</button>
					<button class="btn btn-success ml-2" type="button" data-toggle="modal" data-target="#addNurseModal">Add Nurse</button>
				</div>
			</div>
		</form>
		<!-- Add Nurse Modal -->
		<div class="modal fade" id="addNurseModal" tabindex="-1" role="dialog" aria-labelledby="addNurseModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="addNurseModalLabel">Add Nurse</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="add_nurse.php" method="post">
							<div class="form-group">
								<label for="firstName">First Name</label>
								<input type="text" class="form-control" id="firstName" name="first_name" required>
							</div>
							<div class="form-group">
								<label for="lastName">Last Name</label>
								<input type="text" class="form-control" id="lastName" name="last_name" required>
							</div>
							<div class="form-group">
								<label for="lastName">Cohort</label>
								<input type="text" class="form-control" id="lastName" name="cohort" required>
							</div>
							<div class="form-group">
								<label for="lastName">ESR Number</label>
								<input type="text" class="form-control" id="lastName" name="esr_number" required>
							</div>
							<div class="form-group">
								<label for="lastName">Sex</label>
								<input type="text" class="form-control" id="lastName" name="sex" required>
							</div>
							<div class="form-group">
								<label for="lastName">Date Of Birth</label>
								<input type="text" class="form-control" id="lastName" name="date_of_birth required>
							</div>
							<div class="form-group">
								<label for="lastName">Nationality</label>
								<input type="text" class="form-control" id="lastName" name="nationality" required>
							</div>
							<div class="form-group">
								<label for="lastName">Email</label>
								<input type="text" class="form-control" id="lastName" name="email" required>
							</div>
							<div class="form-group">
								<label for="lastName">Phone Number</label>
								<input type="text" class="form-control" id="lastName" name="phone_number" required>
							</div>
							<div class="form-group">
								<label for="lastName">Address 1</label>
								<input type="text" class="form-control" id="lastName" name="address_1" required>
							</div>
							<div class="form-group">
								<label for="lastName">Address 2</label>
								<input type="text" class="form-control" id="lastName" name="address_2" required>
							</div>
							<div class="form-group">
								<label for="lastName">Address 3</label>
								<input type="text" class="form-control" id="lastName" name="address_3" required>
							</div>
							<div class="form-group">
								<label for="lastName">Postcode</label>
								<input type="text" class="form-control" id="lastName" name="postcode" required>
							</div>
							<div class="form-group">
								<label for="lastName">Attachments</label>
							</div>
							<div class="form-group">
								<label for="lastName">Notes</label>
								<input type="text" class="form-control" id="lastName" name="notes">
							</div>
							<div class="form-group">
								<label for="lastName">Reuslt 1</label>
								<input type="text" class="form-control" id="lastName" name="first_attempt_osce">
							</div>
							<div class="form-group">
								<label for="lastName">Result 2</label>
								<input type="text" class="form-control" id="lastName" name="second_attempt_osce">
							</div>
							<div class="form-group">
								<label for="lastName">Result 3</label>
								<input type="text" class="form-control" id="lastName" name="third_attempt_osce">
							</div>
							
							<button type="submit" class="btn btn-primary">Add Nurse</button>
						</form>
					</div>
				</div>

				
			</div>
		</div>
		<table class="table table-striped">

			<thead>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
					

					// Retrieve nurses' ID, first name, and last name from database
					if (isset($_GET["search"])) {
						$search = $_GET["search"];
						$sql = "SELECT id, first_name, last_name FROM nursing_recruitment WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%'";
					} else {
						$sql = "SELECT id, first_name, last_name FROM nursing_recruitment";
					}

					$result = mysqli_query($conn, $sql);

					// Display nurses' ID, first name, and last name in table rows
					if (mysqli_num_rows($result) > 0) {
					    while($row = mysqli_fetch_assoc($result)) {
					     echo "<tr><td>" . $row["id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td><a href='view_nurse.php?id=" . $row["id"] . "' class='btn btn-custom btn-sm mr-1'>View</a><a href='modify_nurse.php?id=" . $row["id"] . "' class='btn btn-warning btn-sm mr-1'>Modify</a><a href='delete_nurse.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm' onClick=\"return confirm('Are you sure you want to delete this nurse?')\">Delete</a></td></tr>";


					    }
					} else {
					    echo "0 results";
					}

					mysqli_close($conn);
				?>
			</tbody>
		</table>
	</div>

	<?php include('footer.php'); ?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#addNurseModal').on('shown.bs.modal', function () {
            $('#firstName').trigger('focus')
        })
    });
</script>

</body>

</html>