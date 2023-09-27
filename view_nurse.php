<!DOCTYPE html>
<html>

<head>
    <title>View Nurse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5XnU3T4vJ8U+D8hI4l4z7Xp+JfLmslD8h/4/z+QD" crossorigin="anonymous">
    <style>
        .age-box {
            display: inline-block;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
        }
    </style>
    <script>
        function enableInputs(button) {
            const form = button.parentElement;
            const inputs = form.querySelectorAll("input[type='text']");
            const saveButton = form.querySelector("button[type='submit']");

            inputs.forEach(input => input.readOnly = !input.readOnly);
            saveButton.disabled = !saveButton.disabled;
        }
    </script>
</head>

<body>
    <?php include('navbar.php'); ?>
    <?php include('styles.php'); ?>
    <?php include('db_connect.php'); ?>

    <div class="container">
        <ul class="nav nav-tabs" id="myTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Personal Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="osce-tab" data-toggle="tab" href="#osce" role="tab" aria-controls="osce" aria-selected="false">OSCE Results</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pin-tab" data-toggle="tab" href="#pin" role="tab" aria-controls="pin" aria-selected="false">Pin Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="enrollment-tab" data-toggle="tab" href="#enrollment" role="tab" aria-controls="enrollment" aria-selected="false">Enrollment Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="compliance-tab" data-toggle="tab" href="#compliance" role="tab" aria-controls="compliance" aria-selected="false">Compliance</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                <?php


				// Retrieve nurse personal information from database
				if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT cohort, esr_number, First_name, last_name, sex, date_of_birth, Nationality, email, phone_number, Address_1, address_2, address_3, postcode, attachments, notes FROM nursing_recruitment WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "<h2>Personal Information</h2>";
        echo "<form method='POST' action='save_nurse.php'>";
        echo "<input type='hidden' name='id' value='$id'>";
        echo "<table class='table'>";
        
        echo "<tbody>";
        echo "<tr><td>Cohort</td><td><input type='text' name='cohort' value='" . $row["cohort"] . "' readonly></td></tr>";
        echo "<tr><td>Esr Number</td><td><input type='text' name='esr_number' value='" . $row["esr_number"] . "' readonly></td></tr>";
        echo "<tr><td>First Name</td><td><input type='text' name='first_name' value='" . $row["First_name"] . "' readonly></td></tr>";
        echo "<tr><td>Last Name</td><td><input type='text' name='last_name' value='" . $row["last_name"] . "' readonly></td></tr>";
        echo "<tr><td>sex</td><td><input type='text' name='sex' value='" . $row["sex"] . "' readonly></td></tr>";
  $dateOfBirth = new DateTime($row["date_of_birth"]);

// Get current date
$today = new DateTime();

// Calculate the difference between the two dates
$age = $today->diff($dateOfBirth);

// Convert the date format to yyyy/mm/dd for the database
$dateForDB = $dateOfBirth->format('Y-m-d');

// Display the date of birth and age in a table row
echo "<tr><td>Date of Birth</td><td><input type='text' name='date_of_birth' value='" . $dateOfBirth->format('d/m/Y') . "' readonly></td><td><div class='age-box'>" . $age->y . " years old</div></td></tr>";



        echo "<tr><td>Nationality</td><td><input type='text' name='Nationality' value='" . $row["Nationality"] . "' readonly></td></tr>";
        echo "<tr><td>email</td><td><input type='text' name='email' value='" . $row["email"] . "' readonly></td></tr>";
        echo "<tr><td>Phone Number</td><td><input type='text' name='phone_number' value='" . $row["phone_number"] . "' readonly></td></tr>";
        echo "<tr><td>Address 1</td><td><input type='text' name='Address_1' value='" . $row["Address_1"] . "' readonly></td></tr>";
        echo "<tr><td>Address 2</td><td><input type='text' name='address_2' value='" . $row["address_2"] . "' readonly></td></tr>";
        echo "<tr><td>Address 3</td><td><input type='text' name='address_3' value='" . $row["address_3"] . "' readonly></td></tr>";
        echo "<tr><td>Postcode</td><td><input type='text' name='postcode' value='" . $row["postcode"] . "' readonly></td></tr>";
        echo "<tr><td>Attachments</td><td><input type='file' name='attachments' value='" . $row["attachments"] . "'></td></tr>";

        echo "<tr><td>notes</td><td><input type='text' name='notes' value='" . $row["notes"] . "' readonly></td></tr>";
        echo "</tbody>";
        echo "</table>";
        echo "<button type='button' class='btn btn-primary' onclick='enableInputs(this)'>Edit</button>";
        echo "<button type='submit' class='btn btn-success' disabled>Save</button>";
        echo "</form>";
    } else {
        echo "0 results";
    }
}
				
				?>
            </div>
            <div class="tab-pane fade" id="osce" role="tabpanel" aria-labelledby="osce-tab">
                <?php
// Retrieve nurse information from database
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT first_attempt_osce, second_attempt_osce, third_attempt_osce FROM nursing_recruitment WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "<h2>OSCE Results</h2>";
        echo "<table class='table'>";
        
        echo "<tbody>";
        echo "<tr><td><input type='checkbox' class='highlightRow'></td><td>First</td><td>" . $row["first_attempt_osce"] . "</td></tr>";
        echo "<tr><td><input type='checkbox' class='highlightRow'></td><td>Second</td><td>" . $row["second_attempt_osce"] . "</td></tr>";
        echo "<tr><td><input type='checkbox' class='highlightRow'></td><td>Third</td><td>" . $row["third_attempt_osce"] . "</td></tr>";
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "0 results";
    }
}

?>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('.highlightRow');

    // Apply saved state when the page loads
    checkboxes.forEach((checkbox, index) => {
      const isChecked = localStorage.getItem('checkbox' + index) === 'true';
      checkbox.checked = isChecked;
      if (isChecked) {
        checkbox.closest('tr').style.backgroundColor = '#90EE90'; // Light green
      }

      checkbox.addEventListener('change', function() {
        const row = checkbox.closest('tr');
        if (checkbox.checked) {
          row.style.backgroundColor = '#90EE90'; // Light green
          localStorage.setItem('checkbox' + index, 'true');
        } else {
          row.style.backgroundColor = '';
          localStorage.setItem('checkbox' + index, 'false');
        }
      });
    });
  });
</script>


            </div>
            <div class="tab-pane fade" id="pin" role="tabpanel" aria-labelledby="pin-tab">
                <?php


				// Retrieve pin information
				if (isset($_GET["id"])) {
					$id = $_GET["id"];
					$sql = "SELECT nmc_pin, date_nmc_pin_obtained, prn_number FROM nursing_recruitment WHERE id=$id";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						$row = mysqli_fetch_assoc($result);
						echo "<h2>Pin Information</h2>";
						echo "<table class='table'>";
						
						echo "<tbody>";
						echo "<tr><td>NMC Pin</td><td>" . $row["nmc_pin"] . "</td></tr>";
                        echo "<tr><td>Date Pin Obtained</td><td>" . $row["date_nmc_pin_obtained"] . "</td></tr>";
                        echo "<tr><td>PRN Number</td><td>" . $row["prn_number"] . "</td></tr>";
                        echo "</tbody>";
                        echo "</table>";
                        } else {
                        echo "0 results";
                    }
}

?>
            </div>
            <div class="tab-pane fade" id="enrollment" role="tabpanel" aria-labelledby="enrollment-tab">
               <?php


			// Retrieve nurse enrolment information
			if (isset($_GET["id"])) {
				$id = $_GET["id"];
				$sql = "SELECT hospital, ward, cost_centre, band_4_position_number, manager_name, manager_esr_number, manager_phone_number, bank_building_society, account_name, bank_account_number, sort_code, ni_number, start_date FROM nursing_recruitment WHERE id=$id";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					echo "<h2>Enrolment Information</h2>";
					echo "<table class='table'>";
					echo "<tbody>";
					echo "<tr><td>Hospital</td><td>" . $row["hospital"] . "</td></tr>";
					echo "<tr><td>Ward</td><td>" . $row["ward"] . "</td></tr>";
					echo "<tr><td>Cost Centre</td><td>" . $row["cost_centre"] . "</td></tr>";
	                echo "<tr><td>Band Four Position Number</td><td>" . $row["band_4_position_number"] . "</td></tr>";
	                echo "<tr><td>Managers Name</td><td>" . $row["manager_name"] . "</td></tr>";
	                echo "<tr><td>Managers ESR Number</td><td>" . $row["manager_esr_number"] . "</td></tr>";
	                echo "<tr><td>Managers Phone Number</td><td>" . $row["manager_phone_number"] . "</td></tr>";
	                echo "<tr><td>Bank or Building society</td><td>" . $row["bank_building_society"] . "</td></tr>";
	                echo "<tr><td>Account Name</td><td>" . $row["account_name"] . "</td></tr>";
	                echo "<tr><td>Bank Account Number</td><td>" . $row["bank_account_number"] . "</td></tr>";
	                echo "<tr><td>Sort Code</td><td>" . $row["sort_code"] . "</td></tr>";
	                echo "<tr><td>NI Number</td><td>" . $row["ni_number"] . "</td></tr>";
	                echo "<tr><td>Start Date</td><td>" . $row["start_date"] . "</td></tr>";
					echo "</tbody>";
					echo "</table>";
				} else {
					echo "0 results";
				}
			}
			
			?>
            </div>
            <div class="tab-pane fade" id="compliance" role="tabpanel" aria-labelledby="compliance-tab">
                <?php


			// Retrieve nurse compliance information
			if (isset($_GET["id"])) {
				$id = $_GET["id"];
				$sql = "SELECT covid_risk_assessment_score, occupational_health_clearance, tb_appointment, certificate_of_sponsorship_number, brp_number, brp_valid_from, brp_valid_to, rtw_sharecode_number, rtw_expiry_date, dbs_number, dbs_issue_date, dbs_acceptable, candidate_compliance_pack, candidate_compliance_pack_complete FROM nursing_recruitment WHERE id=$id";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					echo "<h2>Compliance</h2>";
					echo "<table class='table'>";
					echo "<tbody>";
					echo "<tr><td>Covid Risk Assessment Score</td><td>" . $row["covid_risk_assessment_score"] . "</td></tr>";
					echo "<tr><td>Occupational Health Clearance</td><td>" . $row["occupational_health_clearance"] . "</td></tr>";
					echo "<tr><td>TB Appointment</td><td>" . $row["tb_appointment"] . "</td></tr>";
	                echo "<tr><td>Certificate of Sponsorship Number</td><td>" . $row["certificate_of_sponsorship_number"] . "</td></tr>";
	                echo "<tr><td>BRP Number</td><td>" . $row["brp_number"] . "</td></tr>";
	                echo "<tr><td>BRP Valid From</td><td>" . $row["brp_valid_from"] . "</td></tr>";
	                echo "<tr><td>BRP Valid To</td><td>" . $row["brp_valid_to"] . "</td></tr>";
	                echo "<tr><td>RTw Sharecode Number</td><td>" . $row["rtw_sharecode_number"] . "</td></tr>";
	                echo "<tr><td>RTW Expiry Date</td><td>" . $row["rtw_expiry_date"] . "</td></tr>";
	                echo "<tr><td>DBS Number</td><td>" . $row["dbs_number"] . "</td></tr>";
	                echo "<tr><td>DBS Issue Date</td><td>" . $row["dbs_issue_date"] . "</td></tr>";
	                echo "<tr><td>DBS Acceptable</td><td>" . $row["dbs_acceptable"] . "</td></tr>";
	                echo "<tr><td>Candidate Compliance Pack</td><td>" . $row["candidate_compliance_pack"] . "</td></tr>";
	                echo "<tr><td>Candidate Compliance Pack Complete</td><td>" . $row["candidate_compliance_pack_complete"] . "</td></tr>";
					echo "</tbody>";
					echo "</table>";
				} else {
					echo "0 results";
				}
			}
			mysqli_close($conn);
			?>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <script>
  $(function() {
    $('#myTab a:first').tab('show');
  });
</script>
    <script>
function enableInputs(button) {
    const form = button.parentElement;
    const inputs = form.getElementsByTagName('input');

    for (let i = 0; i < inputs.length; i++) {
        inputs[i].readOnly = false;
    }

    const saveButton = form.getElementsByTagName('button')[1];
    saveButton.disabled = false;
}
</script>
    
    
</body>
</html>

