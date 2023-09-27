<?php
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $cohort = $_POST['cohort'];
    $esr_number = $_POST['esr_number'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $sex = $_POST['sex'];
    $date_of_birth = $_POST['date_of_birth'];
    $Nationality = $_POST['Nationality'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $Address_1 = $_POST['Address_1'];
    $address_2 = $_POST['address_2'];
    $address_3 = $_POST['address_3'];
    $postcode = $_POST['postcode'];
    $attachments = $_POST['attachments'];
    $notes = $_POST['notes'];

    $sql = "UPDATE nursing_recruitment SET cohort='$cohort', esr_number='$esr_number', first_name='$first_name', last_name='$last_name', sex='$sex', date_of_birth='$date_of_birth', Nationality='$Nationality', email='$email', phone_number='$phone_number', Address_1='$Address_1', address_2='$address_2', address_3='$address_3', postcode='$postcode', attachments='$attachments', notes='$notes' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: view_nurse.php?id=$id"); // Redirect back to the view_nurse.php page.
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>