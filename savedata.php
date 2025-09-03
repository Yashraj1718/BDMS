<?php 
$name = $_POST['fullname'];
$number = $_POST['mobileno'];
$email = $_POST['emailid'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$blood_group = $_POST['blood'];
$address = $_POST['address'];

// Use the correct port (3307)
$conn = mysqli_connect("localhost", "root", "", "blood_donation_db", 3307) 
    or die("Connection error: " . mysqli_connect_error());

$sql = "INSERT INTO donor_details(donor_name, donor_number, donor_mail, donor_age, donor_gender, donor_blood, donor_address) 
        VALUES('$name', '$number', '$email', '$age', '$gender', '$blood_group', '$address')";

if (mysqli_query($conn, $sql)) {
    // Redirect if insertion is successful
    header("Location: http://localhost/BDMS/home.php");
} else {
    die("Query failed: " . mysqli_error($conn));
}

mysqli_close($conn);
?>
