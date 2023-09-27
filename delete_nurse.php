<?php
// Establish connection to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "NursingDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Delete nurse from database
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM nursing_recruitment WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Nurse deleted successfully";
    } else {
        echo "Error deleting nurse: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>